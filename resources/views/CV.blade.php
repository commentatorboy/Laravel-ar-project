<!DOCTYPE html>
<html>
<head>
    <title>My A-Frame Scene</title>
    <script src="https://aframe.io/releases/1.4.0/aframe.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"> </script>
    <script src="https://unpkg.com/aframe-animation-component@^5.1.2/dist/aframe-animation-component.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/gh/n5ro/aframe-physics-system@v$npm_package_version/dist/aframe-physics-system.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/gh/c-frame/aframe-extras@7.5.0/dist/aframe-extras.min.js"></script>
  </head>
<body>
    <!--
       Aframe scene
       branding med firmaet..... screenshot eller "hvad kan jeg gre for dig QR scanner." 
    -->
    <a-scene embedded arjs>
      <a-assets>
        <img crossorigin="anonymous" id="img-scoutpocket" src="{{ asset('/wee3d/public/img/scoutpocket.png') }}">
        <img crossorigin="anonymous" id="img-lazzaweb" src="{{ asset('/wee3d/public/img/lazzaweb.png') }}">
        <img crossorigin="anonymous" id="img-bnicer" src="{{ asset('/wee3d/public/img/bnicer.png') }}">
      </a-assets>
      <!-- click on them to change the picture (like a slide show) or use swipe?-->
          <!-- Aframe light -->
          <a-light type="point" intensity="1" position="0 5 0"></a-light>
        
          <a-image position="0 0 -5" id="first-image" width="3" height="1.5" src="#img-scoutpocket">
            <a-entity position="0 1 1" geometry="primitive: plane; width: auto; height: auto" material="color: #eee"
                text="color: blue; align: center; value: scoutpocket.dk; width: 2; "></a-entity>        
          </a-image>

          <a-image id="second-image" position="4 0 1" rotation="0 -90 0" width="3" height="1.5" src="#img-lazzaweb">
            <a-entity position="0 1 1" geometry="primitive: plane; width: auto; height: auto" material="color: #eee"
                text="color: blue; align: center; value: lazzaweb.dk; width: 2; "></a-entity>       
          </a-image>

          <a-image id="third-image" position="0 0 5" rotation="0 -180 0" width="3" height="1.5" src="#img-bnicer">
            <a-entity position="0 1 1" geometry="primitive: plane; width: auto; height: auto" material="color: #eee"
                text="color: blue; align: center; value: bnicer.dk; width: 2; "></a-entity>          
          </a-image>
          

      <!-- Aframe camera -->
      <a-entity camera look-controls wasd-controls="fly: true" >
          
          <a-cursor></a-cursor>
           
        </a-entity>
        
    </a-scene>
    <script>
      window.alert("look up/down, and swipe");

    </script>
</body>
</html>
