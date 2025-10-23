<!doctype HTML>
<html>
<head>
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <script src="https://aframe.io/releases/0.9.1/aframe.min.js"></script>
    <script src="https://raw.githack.com/jeromeetienne/AR.js/1.7.1/aframe/build/aframe-ar.js"></script>

</head>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
        <a-assets>
            <video webkit-playsinline playsinline id="penguin-sledding" autoplay loop="true" src="{{ asset('/wee3d/public/uploads/video.mp4') }}"></video>
        </a-assets>

        <!-- Using the asset management system. -->


      <a-marker preset="hiro">
        <a-video src="#penguin-sledding" width="4" height="2.25" position="0 0 0" rotation="-90 0 0"></a-video>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>