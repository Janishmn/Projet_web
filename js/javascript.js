let image = document.querySelectorAll('img');

for (let i = 0; i < image.length; i++) {
    image[i].addEventListener('click', function () {
        let source = this.getAttribute('src');
        let description = this.getAttribute('data-description');
        let instaLink = this.getAttribute('data-instagram');
        let twitterLink = this.getAttribute('data-twitter');
        

        let monImage = document.createElement('img');
        monImage.setAttribute('src', source);

 
        let div = document.createElement('div');
        div.setAttribute('id', 'lightbox');

      
        let croix = document.createElement('img');
        croix.setAttribute('src', '../image/croix.png');
        croix.setAttribute('id', 'croix');

      
        let texte = document.createElement('p');
        texte.textContent = description;
        texte.setAttribute('id', 'description');

      
        let instaLinkElement = document.createElement('a');
        instaLinkElement.setAttribute('href', instaLink);
        instaLinkElement.setAttribute('target', '_blank'); 
        instaLinkElement.setAttribute('id', 'insta-link');
       
        let instaImg = document.createElement('img');
        instaImg.setAttribute('src', '../image/instagram.png');
        instaImg.setAttribute('alt', 'Instagram');
        instaImg.setAttribute('class', 'social-icon');
        instaLinkElement.appendChild(instaImg);

        let twitterLinkElement = document.createElement('a');
        twitterLinkElement.setAttribute('href', twitterLink);
        twitterLinkElement.setAttribute('target', '_blank');
        twitterLinkElement.setAttribute('id', 'twitter-link');
       
        let twitterImg = document.createElement('img');
        twitterImg.setAttribute('src', '../image/twitter.png');
        twitterImg.setAttribute('alt', 'Twitter');
        twitterImg.setAttribute('class', 'social-icon');
        twitterLinkElement.appendChild(twitterImg);

       
        

       
        let socialLinksDiv = document.createElement('div');
        socialLinksDiv.setAttribute('id', 'social-links');

       
        socialLinksDiv.appendChild(instaLinkElement);
        socialLinksDiv.appendChild(twitterLinkElement);
        

        div.appendChild(croix);
        div.appendChild(monImage);
        div.appendChild(texte);
        div.appendChild(socialLinksDiv); 

        document.body.appendChild(div);

   
        croix.addEventListener('click', function () {
            document.body.removeChild(div);   
        });
    });
}
