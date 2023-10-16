var loadFile = function (event) {
    var output = document.getElementById('formFileUploaded');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
        URL.revokeObjectURL(output.src) // free memory
    }
};

const imagePreview = document.getElementById('formFile');
const imageUploader = document.getElementById('formFileUploaded');
const file = '';
imageUploader.addEventListener('change', (e) => {
    file = e.target.files[0];
    console.file;
});