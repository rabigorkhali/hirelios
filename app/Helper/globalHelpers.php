<?php

use Carbon\Carbon;


function authUser()
{
    return Auth::user();
}


function generateToken($length)
{
    return bin2hex(openssl_random_pseudo_bytes($length));
}

function localDatetime($dateTime)
{
    return Carbon::parse($dateTime)->timezone('Asia/Kathmandu');
}


function paginate()
{
    return Config::get('constants.PAGINATE');
}

function pageIndex($items)
{
    $sn = 0;
    if (method_exists($items, 'perPage') && method_exists($items, 'currentPage')) {
        $sn = $items->perPage() * ($items->currentPage() - 1);
    }

    return $sn;
}

function SN($sn, $key)
{
    return $sn += $key + 1;
}

function getSystemPrefix()
{
    return env('SYSTEM_PREFIX', 'system');
}

function getImageUploadFirstLevelPath()
{
    return env('IMAGE_UPLOAD_PATH', 'uploads');
}

function getConfigTableData()
{
    return \App\Models\Config::first();
}

function modules()
{
    $modules = Config::get('cmsConfig.modules');
    return $modules;
}

function isPermissionSelected($permission, $permissions)
{
    $permission = json_decode($permission);
    $permissions = json_decode($permissions);
    $check = false;
    if (!is_array($permission)) {
        if ($permissions != null) {
            $exists = in_array($permission, $permissions);
            if ($exists) {
                $check = true;
            }
        }
    } else {
        $temCheck = false;
        if ($permissions != null) {
            foreach ($permission as $perm) {
                $exists = in_array($perm, $permissions);
                if ($exists) {
                    $temCheck = true;
                }
            }
        }
        $check = $temCheck;
    }

    return $check;
}

function hasPermission($url, $method = 'get')
{
    if (!authUser()) {
        return false;
    }
    $role = authUser()->role;
    $method = strtolower($method);
    $splittedUrl = explode('/' . getSystemPrefix(), $url);
    if (count($splittedUrl) > 1) {
        $url = $splittedUrl[1];
    } else {
        $url = $splittedUrl[0];
    }

    if ($role->id == 1) {
        $permissionDeniedToSuperUserRoutes = Config::get('cmsConfig.permissionDeniedToSuperUserRoutes');
        $checkDeniedRoute = true;
        foreach ($permissionDeniedToSuperUserRoutes as $route) {
            if (\Str::is($route['url'], $url) && $route['method'] == $method) {
                $checkDeniedRoute = false;
            }
        }

        return $checkDeniedRoute;
    }

    $permissionIgnoredUrls = Config::get('cmsConfig.permissionGrantedbyDefaultRoutes');

    $check = false;

    foreach ($permissionIgnoredUrls as $piurl) {
        if (\Str::is($piurl['url'], $url) && $piurl['method'] == $method) {
            $check = true;
        }
    }
    if ($check) {
        return true;
    }

    $permissions = $role->permissions;

    if ($permissions == null) {
        return false;
    }

    // foreach ($permissions as $piurl) {
    //     if (\Str::is($piurl['url'], $url) && $piurl['method'] == $method) {
    //         $check = true;
    //     }
    // }

    foreach ($permissions as $piurl) {
        if (fnmatch($piurl['url'], $url, FNM_PATHNAME) && $piurl['method'] == $method) {
            $check = true;
            break;
        }
    }
    if ($check) {
        return true;
    }

    return false;
}

function hasPermissionOnModule($module)
{
    $check = false;
    if (!$module['hasSubmodules']) {
        $check = hasPermission($module['route']);
    } else {
        try {
            foreach ($module['submodules'] as $submodule) {
                /* added third level */
                if (!$submodule['hasSubmodules']) {
                    /* after end third level if only two levels */
                    $check = hasPermission($submodule['route']);
                    if ($check == true) {
                        break;
                    }
                    /**/
                } else {
                    try {
                        foreach ($submodule['submodules'] as $childModule) {
                            $check = hasPermission($childModule['route']);
                            if ($check == true) {
                                break;
                            }
                        }
                    } catch (\Exception $e) {
                        return false;
                    }
                }
                /* end third level */
            }
        } catch (\Exception $e) {
            return false;
        }
    }

    return $check;
}

function cssIndexProgramColorsRandom()
{
    $colors = ["green", "blue", "purple", "pink", "black"];
    return $colors[array_rand($colors)];
}

function uploadImage($dir, $inputName, $resize = false, $width = null, $height = null)
{
    // Ensure the directory exists
    $directory = public_path($dir);
    if (!is_dir($directory)) {
        mkdir($directory, 0775, true);
    }

    // Get uploaded file details
    $file = $_FILES[$inputName];
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $uniqueName = uniqid();
    $fileName = $uniqueName . '.' . $extension;
    $fileThumbnail = $uniqueName . '-medium.' . $extension;
    $fileSmall = $uniqueName . '-small.' . $extension;

    // Move uploaded file to the target directory
    $originalPath = $directory . '/' . $fileName;
    move_uploaded_file($file['tmp_name'], $originalPath);

    // Resize image if needed
    if ($resize || $width || $height) {
        resizeImage($originalPath, $originalPath, $width, $height);
    }

    // Create medium thumbnail
    $thumbnailPath = $directory . '/' . $fileThumbnail;
    resizeImage($originalPath, $thumbnailPath, 500, 500);

    // Create small thumbnail
    $smallPath = $directory . '/' . $fileSmall;
    resizeImage($originalPath, $smallPath, 70, null);

    // Return the original filename
    return $fileName;
}

function resizeImage($sourcePath, $destinationPath, $targetWidth = null, $targetHeight = null)
{
    // Load the image
    list($originalWidth, $originalHeight, $imageType) = getimagesize($sourcePath);
    $image = createImageFromType($sourcePath, $imageType);

    // Calculate new dimensions
    if (!$targetWidth && !$targetHeight) {
        $targetWidth = $originalWidth;
        $targetHeight = $originalHeight;
    } elseif (!$targetWidth) {
        $targetWidth = ($targetHeight / $originalHeight) * $originalWidth;
    } elseif (!$targetHeight) {
        $targetHeight = ($targetWidth / $originalWidth) * $originalHeight;
    } else {
        $aspectRatio = $originalWidth / $originalHeight;
        if ($targetWidth / $targetHeight > $aspectRatio) {
            $targetWidth = $targetHeight * $aspectRatio;
        } else {
            $targetHeight = $targetWidth / $aspectRatio;
        }
    }

    // Create resized image
    $resizedImage = imagecreatetruecolor($targetWidth, $targetHeight);
    imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $targetWidth, $targetHeight, $originalWidth, $originalHeight);

    // Save the resized image
    saveImageFromType($resizedImage, $destinationPath, $imageType);

    // Free memory
    imagedestroy($image);
    imagedestroy($resizedImage);
}

function createImageFromType($filePath, $imageType)
{
    switch ($imageType) {
        case IMAGETYPE_JPEG:
            return imagecreatefromjpeg($filePath);
        case IMAGETYPE_PNG:
            return imagecreatefrompng($filePath);
        case IMAGETYPE_GIF:
            return imagecreatefromgif($filePath);
        default:
            throw new Exception('Unsupported image type');
    }
}

function saveImageFromType($image, $filePath, $imageType)
{
    switch ($imageType) {
        case IMAGETYPE_JPEG:
            imagejpeg($image, $filePath, 100);
            break;
        case IMAGETYPE_PNG:
            imagepng($image, $filePath);
            break;
        case IMAGETYPE_GIF:
            imagegif($image, $filePath);
            break;
        default:
            throw new Exception('Unsupported image type');
    }
}
function removeImage($dir)
{
    $f1 =  $dir ;
    $f2 = str_replace('.', '-medium.', $f1);
    $f3 = str_replace('.', '-small.', $f1);
    File::delete(public_path() .'/'.$f1);
    File::delete(public_path() .'/'.$f2);
    File::delete(public_path() .'/'.$f3);
}

