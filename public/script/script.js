let animalPic = document.getElementById("animal-picture");
let uploadImage = document.getElementById("upload-image");

uploadImage.onchange = function() {
    console.log("hi");
    animalPic.src = URL.createObjectURL(uploadImage.files[0]);
    const width = animalPic.offsetWidth;
    animalPic.style.height = width + 'px';
}