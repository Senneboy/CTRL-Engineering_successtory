# SINGLE CASE WEB PAGE - CTRL Engineering
This page is a redesign of the single case web page of CTRL Engineering.
The goal of this new page is to make it visually more attractive and immediately give the visitor the essential information about the case.


---

## Main files

- `singleCase.php` – main page structure and content
- `singleCase_Text.css` – text, image, and video styling
  - _`singleCase_Text.scss` – scss version_
- `singleCase_Carousel.css` – carousel styling
  - _`singleCase_Carousel.scss` – scss version_
- `singleCase_IDCard.css` – ID card styling
  - _`singleCase_IDCard.scss` – scss version_

---

## What you see on the page



- banner
  - title
  - background image
- text section (3 variants)
  - full-width container
  - flex layout with an image
  - column layout with different text blocks and a border between them
- ID card
  - important information about the case
  - ability to collapse
- image carousel
- quote section
  - centered with border
- video block (only if video URL is given)
- responsive layout

---

## What I worked on


### Banner
Code can be found in `singleCase.php`.  
The banner is styled with `clip-path`. This makes it easier to add a correct box shadow while keeping the indent.


<br>

---
### Text container
The main content is displayed in a coloured container.  
The text container is slightly smaller than the grey container below, which makes it easier to read.  
Next to the container, there is a background image visible, this helps the content stand out. This background is controlled with an image variable in `singleCase.php`.


<br>

---
### Text & fonts
The CSS for paragraph and header fonts, images, and the video can be found in `singleCase_Text.css` and `singleCase_Text.scss`.
These are the fonts used for:  
***Titles*** 

**Header 2** is used for the titles you mostly see on the page.
```css
h2 {
font-family: 'Montserrat', sans-serif;
font-size: 28px;
}
```
**Header 3** is used for the longer titles.  
It is more indented and a little smaller. 
```css
h3 {
    font-family: 'Montserrat', sans-serif;
    font-size: 25px;
    padding-left: 10px;
}
```

**Paragraphs**  are the normal text sections, the information/explanation about the project. 
```css
p {
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
}
```

**Quote** is used for the quote shown above the result.  
It is centered, larger, has a lighter font weight, and has a border around it.
```css
.quote {
    font-weight: 100;
    font-size: 24px;
    font-family: $body-font;
    color: $text-color;
    border: $border-color solid 1px;
}
```

<br>

---
### Carousel
CSS can be found in `singleCase_Carousel.css`.  
SCSS can be found in `singleCase_Carousel.scss`.  
At the top of the page, you can see an image carousel.  
The carousel is centered and made responsive for different viewports and mobile.  
This carousel has two buttons that change position and colour on smaller viewports.


<br>

---
### ID Card
CSS can be found in `singleCase_IDCard.css`.  
SCSS can be found in `singleCase_IDCard.scss`.  
JavaScript can be found in `singleCase.php`.  
The ID card **layout** is made in CSS, with a polygon around the title and colours matching the site.
The **button functionality** is made in JavaScript.  
The button makes the card collapse. When switching to a smaller or bigger viewport, the card **automatically** collapses or expands.

<br>

---
### Responsive design
Everything in this page has been made responsive for different screen sizes, including mobile devices.  
On smaller screens, columns are placed below each other to improve their readability and use the available space better.  
The background image is also removed to create more space, and the carousel buttons are moved on top of the image with a semi-transparent colour so they remain visible without taking up extra space.
<br>

---
## Technologies used

Below are the main languages and tools used in this project:

- `PHP` – used to build the page **structure** and store **variables**, such as titles, text, image paths, and video links.
- `HTML` – used to **structure** the content of the page.
- `CSS` – used to **style** the page:layout, colours, spacing, and responsiveness.
- `SCSS` – used as a more organized version of CSS with a cleaner structure.
- `JavaScript` – used for functionality of buttons, and responsive collapsing of the ID.
- `XAMPP` – used as a local Apache server to run and view the PHP file in the browser.

---
