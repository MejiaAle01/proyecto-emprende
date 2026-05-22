<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Proyecto Sis </title>
    <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.5/dist/mindar-image-aframe.prod.js"></script>
</head>

<body>
    <a-scene mindar-image="imageTargetSrc: {{ asset('target/top.mind') }}; maxTrack: 3; uiScanning:no;"
        vr-mode-ui="enabled: false"
        device-orientation-permission-ui="enabled: false>
        <a-assets>
            <img id="osoModelImg"
        src="{{ asset('img/osoimg.png') }}">
        <img id="dinoModelImg" src="{{ asset('img/dinoimg.png') }}">
        <img id="cocoModelImg" src="{{ asset('img/cocoimg.png') }}">
        <img id="lataModelImg" src="{{ asset('img/lataimg.png') }}">
        <img id="chicaModelImg" src="{{ asset('img/chicaimg.png') }}">
        </a-assets>
        <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
        <a-entity mindar-image-target="targetIndex: 0">
            <a-image src="{{ asset('img/osoimg.png') }}" position="0 0 0" width="1" height="1">
            </a-image>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 1">
            <a-image src="{{ asset('img/dinoimg.png') }}" position="0 0 0" width="1" height="1">
            </a-image>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 2">
            <a-image src="#cocoModelImg" position="0 0 0" width="1" height="1">
            </a-image>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 3">
            <a-image src="#lataModelImg" position="0 0 0" width="1" height="1">
            </a-image>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 4">
            <a-image src="#chicaModelImg" position="0 0 0" width="1" height="1">
            </a-image>
        </a-entity>
    </a-scene>
</body>

</html>
