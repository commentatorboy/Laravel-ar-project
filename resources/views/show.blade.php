<!doctype HTML>
<html>
<link rel="stylesheet" href="{{ asset('/wee3d/public/css/show.css') }}">


<script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"> </script>
<script src="https://unpkg.com/aframe-animation-component@^5.1.2/dist/aframe-animation-component.min.js"></script>

<body style='margin : 0px; overflow: hidden;'>

    <a-scene embedded arjs renderer="colorManagement: true;
                   precision: lowp;">
	  <a-assets>
        @if ($ar_object->link)
            <a-asset-item id="tree" src="{{ $ar_object->link }}" crossOrigin="anonymous">

        @else
            <a-asset-item id="tree" src="{{ asset('/wee3d/public/uploads/'.$ar_object->uid.'.glb') }}">
        @endif

      </a-assets>
  	<a-marker preset='hiro'>
           <a-entity id="entity" scale="0.5 0.5 0.5"
           gltf-model="#tree" animation="property: rotation;
                  to: 0 360 0;
                  dir: alternate;
                  easing: linear;
                  dur: 30000;
                  loop: true;
                  pauseEvents: rotation-pause;
                  resumeEvents: rotation-resume;
                  restartEvents: rotation-restart">
        	</a-entity>
        </a-marker>

      <a-entity camera></a-entity>

    </a-scene>

    <div class="flex-container">
        <div>
            <button id="scale_up_small" onclick="scaleUp(0.01);">scale up +0.01</button>
        </div>
        <div>
            <button id="scale_down_small" onclick="scaleDown(0.01);">scale down -0.01</button>
        </div>
      	<div>
            <button id="scale_up" onclick="scaleUp(0.1);">scale up +0.1</button>
        </div>
        <div>
            <button id="scale_down" onclick="scaleDown(0.1);">scale down -0.1</button>
        </div>
        <div>
          	<button id="play_button">Pause</button>
        </div>


    </div>


    <script>
      	//default event
        var currentEvent = "rotation-pause";



        //default scale:
        scale = 3;

        //play/stop animation
        var el = document.querySelector('#entity');

        var pause_button = document.querySelector('#pause_button');
        var play_button = document.querySelector('#play_button');

        //scale up and down the object

        function changeScale(newscale){
            var new_scale_string = newscale;
            var new_scale_text = new_scale_string + ' ' + new_scale_string + ' ' + new_scale_string;
            el.setAttribute('scale', new_scale_text);
            console.log(new_scale_text);
        }

        function scaleUp(amount){
            var old_scale = el.getAttribute('scale');

            var newscale = old_scale.x + amount;
            changeScale(newscale);

        }

        function scaleDown(amount){
            var old_scale = el.getAttribute('scale');

            var newscale = old_scale.x - amount;
            changeScale(newscale);
        }

  	  document.querySelector("#play_button").addEventListener("click", function(event) {
         document.getElementById("entity").emit(currentEvent);
          switch (currentEvent) {
            case "rotation-restart":
            case "rotation-resume":
              play_button.textContent = "Pause";
              currentEvent = "rotation-pause";
              break;
            case "rotation-pause":
              play_button.textContent = "Resume";
              currentEvent = "rotation-resume";
              break;
          }
       });


    </script>
  </body>


</html>

