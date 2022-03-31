const inpFile = document.getElementById('inpFiles');
const previewContainer = document.getElementById('imagePreview');
const previewImage = previewContainer.querySelector('.image-preview__image');

inpFile.addEventListener("change", function () {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        previewImage.style.display = "block";

        reader.addEventListener("load", function () {
            previewImage.setAttribute('src', this.result);
        });

        reader.readAsDataURL(file);
    } else {
        previewImage.style.display = null;
        previewImage.setAttribute("src",'')
    }
});