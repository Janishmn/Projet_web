let monImage = document.querySelectorAll('img.lightbox');

console.log("Images lightbox trouvées :");

for(let i = 0; i < monImage.length; i++) {
    monImage[i].addEventListener('click', function() {
        let source = this.getAttribute('src');
        console.log('Image cliquée, source :', source);

        let div = document.createElement('div');
        div.setAttribute('id', 'lightbox');

        let image = document.createElement('img');
        image.setAttribute('src', source);

        let close = document.createElement('img');
        close.setAttribute('src','../image/croix.png');
        close.setAttribute('id', 'croix');

        div.appendChild(close);
        div.appendChild(image);

        close.addEventListener('click', function(){
            document.body.removeChild(div);
            console.log('Lightbox fermée');
        });

        document.body.appendChild(div);
        console.log('Lightbox affichée');
    });
}
