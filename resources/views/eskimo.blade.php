<!doctype HTML>
<html>
    <link rel="stylesheet" href="{{ asset('/wee3d/public/css/show.css') }}">
    <script src="https://aframe.io/releases/0.9.1/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.7.1/aframe/build/aframe-ar.js"></script>

<body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded renderer='antialias: true; alpha: true; logarithmicDepthBuffer: true' arjs='debugUIEnabled: false;'>
        <!-- Set the asset to be /wee3d/public in front of public on website -->
        <a-assets>
            <a-asset-item id="mur" src="{{ asset('/wee3d/public/uploads/murerske.glb') }}"></a-asset-item>
        </a-assets>

  	   <a-marker preset='custom' type='pattern' url="{{ asset('/wee3d/public/uploads/eskimo.patt') }}">
              <a-entity id="entity" scale="3 3 3"
                  gltf-model="#mur" animation="property: rotation;
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
            <input id="scale" type="range" value="0" min="-2" max="40" step="0.01">

        </div>

        <div>
          	<button id="play_button">Pause</button>
        </div>


    </div>


    <script>
      	//default event
        var currentEvent = "rotation-pause";

        //play/stop animation
        var mur = document.querySelectorAll('[gltf-model="#mur"]')[0];


        var pause_button = document.querySelector('#pause_button');
        var play_button = document.querySelector('#play_button');

        const input = document.querySelector('#scale');
        input.addEventListener('input', updateValue);

        function updateValue(e) {
            var new_scale_string = e.srcElement.value;
            var new_scale_text = new_scale_string + ' ' + new_scale_string + ' ' + new_scale_string;
            mur.setAttribute('scale', new_scale_text);
        }
        


  	  document.querySelector("#play_button").addEventListener("click", function(event) {
         document.getElementById("mur").emit(currentEvent);

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