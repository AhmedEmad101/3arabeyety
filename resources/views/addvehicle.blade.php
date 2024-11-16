@include('PartialViews.Head')
@include('PartialViews.navbar')
@include('PartialViews.Carousel')
<script>function getImagePreview(event) {
    var image = URL.createObjectURL(event.target.files[0]);
    var imageDiv = document.getElementById('Preview');
    var NewImage = document.createElement('img');
    imageDiv.innerHTML = '';
    NewImage.src = image;
    NewImage.width = 200;
    NewImage.Height = 200;
    imageDiv.appendChild(NewImage);
     };</script>
