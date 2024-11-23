// for form image input previewer
const imageInput = document.getElementById('image-input');
const imagePreview = document.getElementById('image-preview');
if(imageInput){
    imageInput.onchange = evt => {
    
        const [file] = imageInput.files
        if (file) {
            imagePreview.src = URL.createObjectURL(file)
        }
    }
}