let uploadButton5 = document.getElementById("upload-button5");
let chosenImage = document.getElementById("chosen-image");
let fileName = document.getElementById("file-name");

uploadButton5.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(uploadButton5.files[0]);
    reader.onload = () => {
        chosenImage.setAttribute("src",reader.result);
    }
    fileName.textContent = uploadButton5.files[0].name;
}