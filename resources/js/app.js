require("./bootstrap");
require("@coreui/coreui/dist/js/coreui.bundle.min");

import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

ClassicEditor.defaultConfig = {
    toolbar: {
        items: [
            'heading',
            '|',
            'bold',
            'italic',
            'undo',
            'redo'
        ]
    },
    language: 'en'
};

ClassicEditor.create(document.querySelector("#editor"))
    .then((editor) => {
        window.editor = editor;
    })
    .catch((error) => {
        console.error("There was a problem initializing the editor.", error);
    });
