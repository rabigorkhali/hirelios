
<script>
    $(document).ready(function () {

        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

    });
</script>


<script>
    // Get the video
    var video = document.getElementById("myVideo");

    // Get the button
    var btn = document.getElementById("myBtn");

    // Pause and play the video, and change the button text
    function videoFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "<i class='las la-pause'></i>";
        } else {
            video.pause();
            btn.innerHTML = "<i class='las la-play'></i>";
        }
    }
</script>

<script>
    const displacementSlider = function (opts) {

        let vertex = `
	  varying vec2 vUv;
	  void main() {
		vUv = uv;
		gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
	  }
  `;

        let fragment = `

	  varying vec2 vUv;

	  uniform sampler2D currentImage;
	  uniform sampler2D nextImage;

	  uniform float dispFactor;

	  void main() {

		  vec2 uv = vUv;
		  vec4 _currentImage;
		  vec4 _nextImage;
		  float intensity = 0.3;

		  vec4 orig1 = texture2D(currentImage, uv);
		  vec4 orig2 = texture2D(nextImage, uv);

		  _currentImage = texture2D(currentImage, vec2(uv.x, uv.y + dispFactor * (orig2 * intensity)));

		  _nextImage = texture2D(nextImage, vec2(uv.x, uv.y + (1.0 - dispFactor) * (orig1 * intensity)));

		  vec4 finalTexture = mix(_currentImage, _nextImage, dispFactor);

		  gl_FragColor = finalTexture;

	  }
  `;

        let images = opts.images, image, sliderImages = [];
        ;
        let canvasWidth = images[0].clientWidth;
        let canvasHeight = images[0].clientHeight;
        let parent = opts.parent;
        let renderWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        let renderHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

        let renderW, renderH;

        if (renderWidth > canvasWidth) {
            renderW = renderWidth;
        } else {
            renderW = canvasWidth;
        }

        renderH = canvasHeight;

        let renderer = new THREE.WebGLRenderer({
            antialias: false
        });


        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setClearColor(0x23272A, 1.0);
        renderer.setSize(renderW, renderH);
        parent.appendChild(renderer.domElement);

        let loader = new THREE.TextureLoader();
        loader.crossOrigin = "anonymous";

        images.forEach(img => {

            image = loader.load(img.getAttribute('src') + '?v=' + Date.now());
            image.magFilter = image.minFilter = THREE.LinearFilter;
            image.anisotropy = renderer.capabilities.getMaxAnisotropy();
            sliderImages.push(image);

        });

        let scene = new THREE.Scene();
        scene.background = new THREE.Color(0x23272A);
        let camera = new THREE.OrthographicCamera(
            renderWidth / -2,
            renderWidth / 2,
            renderHeight / 2,
            renderHeight / -2,
            1,
            1000);


        camera.position.z = 1;

        let mat = new THREE.ShaderMaterial({
            uniforms: {
                dispFactor: {type: "f", value: 0.0},
                currentImage: {type: "t", value: sliderImages[0]},
                nextImage: {type: "t", value: sliderImages[1]}
            },

            vertexShader: vertex,
            fragmentShader: fragment,
            transparent: true,
            opacity: 1.0
        });


        let geometry = new THREE.PlaneBufferGeometry(
            parent.offsetWidth,
            parent.offsetHeight,
            1);

        let object = new THREE.Mesh(geometry, mat);
        object.position.set(0, 0, 0);
        scene.add(object);

        let addEvents = function () {

            let pagButtons = Array.from(document.getElementById('pagination').querySelectorAll('button'));
            let isAnimating = false;

            pagButtons.forEach(el => {

                el.addEventListener('click', function () {

                    if (!isAnimating) {

                        isAnimating = true;

                        document.getElementById('pagination').querySelectorAll('.active')[0].className = '';
                        this.className = 'active';

                        let slideId = parseInt(this.dataset.slide, 10);

                        mat.uniforms.nextImage.value = sliderImages[slideId];
                        mat.uniforms.nextImage.needsUpdate = true;

                        TweenLite.to(mat.uniforms.dispFactor, 1, {
                            value: 1,
                            ease: 'Expo.easeInOut',
                            onComplete: function () {
                                mat.uniforms.currentImage.value = sliderImages[slideId];
                                mat.uniforms.currentImage.needsUpdate = true;
                                mat.uniforms.dispFactor.value = 0.0;
                                isAnimating = false;
                            }
                        });


                        let slideTitleEl = document.getElementById('slide-title');
                        let slideStatusEl = document.getElementById('slide-status');
                        let nextSlideTitle = document.querySelectorAll(`[data-slide-title="${slideId}"]`)[0].innerHTML;
                        let nextSlideStatus = document.querySelectorAll(`[data-slide-status="${slideId}"]`)[0].innerHTML;

                        TweenLite.fromTo(slideTitleEl, 0.5,
                            {
                                autoAlpha: 1,
                                y: 0
                            },

                            {
                                autoAlpha: 0,
                                y: 20,
                                ease: 'Expo.easeIn',
                                onComplete: function () {
                                    slideTitleEl.innerHTML = nextSlideTitle;

                                    TweenLite.to(slideTitleEl, 0.5, {
                                        autoAlpha: 1,
                                        y: 0
                                    });

                                }
                            });


                        TweenLite.fromTo(slideStatusEl, 0.5,
                            {
                                autoAlpha: 1,
                                y: 0
                            },

                            {
                                autoAlpha: 0,
                                y: 20,
                                ease: 'Expo.easeIn',
                                onComplete: function () {
                                    slideStatusEl.innerHTML = nextSlideStatus;

                                    TweenLite.to(slideStatusEl, 0.5, {
                                        autoAlpha: 1,
                                        y: 0,
                                        delay: 0.1
                                    });

                                }
                            });


                    }

                });

            });

        };

        addEvents();

        window.addEventListener('resize', function (e) {
            renderer.setSize(renderW, renderH);
        });

        let animate = function () {
            requestAnimationFrame(animate);

            renderer.render(scene, camera);
        };
        animate();
    };

    imagesLoaded(document.querySelectorAll('img'), () => {

        document.body.classList.remove('loading');

        const el = document.getElementById('slider');
        const imgs = Array.from(el.querySelectorAll('img'));
        new displacementSlider({
            parent: el,
            images: imgs
        });


    });

    // Draggable
    $(function () {
        $("#draggable").draggable();
    });

    function myFunction() {
        var x = document.getElementById("draggable");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    //Back to Top
    var btn = $('#back-top');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK',
            confirmButtonColor: '#3085d6',
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK',
            confirmButtonColor: '#d33',
        });
    </script>
@endif
