<script type="importmap">
{
  "imports": {
    "three": "https://cdn.jsdelivr.net/npm/three@v0.125.0/build/three.module.js",
    "three/addons/": "https://cdn.jsdelivr.net/npm/three@v0.125.0/examples/jsm/"
  }
}
</script>
<script type="module">
	import * as THREE from 'three';
	import { OBJLoader } from 'three/addons/loaders/OBJLoader.js';
	import { MTLLoader } from 'three/addons/loaders/MTLLoader.js';
	import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

	// WebGL gun model
	function initWebGL() {
		var scene = new THREE.Scene();

		let mtlLoader = new MTLLoader();
		
		let objLoader = new OBJLoader();

		var container = document.getElementById('gun-model');

		var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000)
		camera.position.z = 8;

		var renderer = new THREE.WebGLRenderer({antialias: true, alpha: true});

		renderer.setSize($(container).width(), $(container).height());
		container.appendChild(renderer.domElement);

		window.addEventListener('resize', () => {
			renderer.setSize($(container).width(), $(container).height());
			camera.aspect = $(container).width() / $(container).height();

			camera.updateProjectionMatrix();
		})

		mtlLoader.load('img/gun.mtl', (materials) => {
			materials.preload()
			objLoader.setMaterials(materials)
			objLoader.load('img/gun.obj', (object) => {
				object.position.x = .5;
				object.position.y = 1;
				object.position.z = 0;
				object.rotation.x = 0;
				object.rotation.y = 1.5;
				scene.add(object);
			})
		})

		var controls = new OrbitControls(camera, renderer.domElement);
		controls.autoRotate = true;
		controls.autoRotateSpeed = -5;
		controls.target = new THREE.Vector3(.5, .5, .5);
		controls.maxDistance = 30;
		controls.minDistance = 3;
		controls.enableDamping = true;
		controls.dampingFactor = 0.1;
		controls.zoomSpeed = 3.0;

		var frontlight = new THREE.PointLight(0xffffff, .5, 1000)
		frontlight.position.set(0, 15, 15);
		scene.add(frontlight);

		var backlight = new THREE.PointLight(0xffffff, .5, 1000)
		backlight.position.set(0, 15, -15);
		scene.add(backlight);

		var rightlight = new THREE.PointLight(0xffffff, .5, 1000)
		rightlight.position.set(15, 15, 0);
		scene.add(rightlight);

		var leftlight = new THREE.PointLight(0xffffff, .5, 1000)
		leftlight.position.set(-15, 15, 0);
		scene.add(leftlight);

		const zoomOutBtn = document.getElementById('zoom-out');
		const zoomInBtn = document.getElementById('zoom-in');

		zoomOutBtn.addEventListener('click', () => {
			const scrollAmount = 100;
			const event = new WheelEvent('wheel', { deltaY: scrollAmount });
			renderer.domElement.dispatchEvent(event);
		});

		zoomInBtn.addEventListener('click', () => {
			const scrollAmount = -100;
			const event = new WheelEvent('wheel', { deltaY: scrollAmount });
			renderer.domElement.dispatchEvent(event);
		});

		var render = function() {
			requestAnimationFrame(render);
			controls.update();
			renderer.render(scene, camera);
		}
		render();
		controls.saveState();

		$(document).ready(function() {
			$('.animate-btn').click(function() {
				$(this).text($(this).text() == 'Stop' ? 'Animate' : 'Stop');
				if (controls.autoRotate) {
					controls.autoRotate = false;
				} else {
					controls.autoRotate = true;
				}
			});
			$('.reset').on('click', function() {
				controls.reset();
			});
		});
	}

	$(document).ready(function() {
		$('.rotate-btn').on('click', function() {
			$('.gun-model-overlay').fadeIn();
			setTimeout(function() {
				initWebGL();
			}, 400)
		});
		$('.gun-model-close').on('click', function() {
			$('.gun-model-overlay').fadeOut();
			setTimeout(function() {
				$('#gun-model canvas').remove();
			}, 400)
		});
	});
</script>