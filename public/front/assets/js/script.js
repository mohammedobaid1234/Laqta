// To Change Height Of Navs 
let headerNavLinks = document.getElementsByClassName("headerNavLink")
let layerActiveNav = document.querySelector(".layerActiveNav")
headerNavLinks[0].addEventListener("mouseover", function () {
    layerActiveNav.style.height = "36%";
})
headerNavLinks[1].addEventListener("mouseover", function () {
    layerActiveNav.style.height = "43%";
})
headerNavLinks[2].addEventListener("mouseover", function () {
    layerActiveNav.style.height = "50.5%";
})
headerNavLinks[3].addEventListener("mouseover", function () {
    layerActiveNav.style.height = "57.5%";
})
headerNavLinks[4].addEventListener("mouseover", function () {
    layerActiveNav.style.height = "64.5%";
})
headerNavLinks[5].addEventListener("mouseover", function () {
    layerActiveNav.style.height = "73%";
})

// To Change Theme
let topButton = document.getElementById("topButton");
let topButtonBg = document.getElementById("topButtonBg");
let topButtonArrow = document.getElementById("topButtonArrow");
let topButtonLine = document.getElementById("topButtonLine");
let ChangeBgCircle = document.getElementById("ChangeBgCircle")
let switchTheme = document.getElementById("ChangeBgCircleItem")
let allInDarkTheme = document.getElementsByClassName("darkTheme")
let whiteBgTheme = document.getElementsByClassName("whiteBgTheme")
let whiteColorTheme = document.getElementsByClassName("whiteColorTheme")
let contentCardDark = document.getElementsByClassName("contentCardDark")
let whiteFillTheme = document.getElementsByClassName("whiteFillTheme")
let whiteStrokeTheme = document.getElementsByClassName("whiteStrokeTheme")
let buttonsTabs = document.getElementsByClassName("buttonsTabs")
let sectionTitleTop = document.getElementsByClassName("sectionTitle-top")
let textDecorationUnderlineWhite = document.getElementsByClassName("text-decoration-underline-white")
let darkThemeContact = document.querySelector(".darkThemeContact")
let darkWord = document.getElementById("darkWord")
let lightWord = document.getElementById("lightWord")
let barcodeInDark = document.getElementById("barcodeInDark")
let barcodeInLight = document.getElementById("barcodeInLight")
let loaderLayout = document.getElementById("loaderLayout")
let allInDarkThemeArr = []
let whiteBgThemeArr = []
let whiteColorThemeArr = []
let contentCardDarkArr = []
let whiteFillThemeArr = []
let whiteStrokeThemeArr = []
let buttonsTabsArr = []
let sectionTitleTopArr = []
let textDecorationUnderlineWhiteArr = []

for (let i = 0; i < allInDarkTheme.length; i++) {
    allInDarkThemeArr.push(allInDarkTheme[i])
}
for (let i = 0; i < whiteBgTheme.length; i++) {
    whiteBgThemeArr.push(whiteBgTheme[i])
}
for (let i = 0; i < whiteColorTheme.length; i++) {
    whiteColorThemeArr.push(whiteColorTheme[i])
}
for (let i = 0; i < contentCardDark.length; i++) {
    contentCardDarkArr.push(contentCardDark[i])
}
for (let i = 0; i < whiteFillTheme.length; i++) {
    whiteFillThemeArr.push(whiteFillTheme[i])
}
for (let i = 0; i < whiteStrokeTheme.length; i++) {
    whiteStrokeThemeArr.push(whiteStrokeTheme[i])
}
for (let i = 0; i < buttonsTabs.length; i++) {
    buttonsTabsArr.push(buttonsTabs[i])
}
for (let i = 0; i < sectionTitleTop.length; i++) {
    sectionTitleTopArr.push(sectionTitleTop[i])
}
for (let i = 0; i < textDecorationUnderlineWhite.length; i++) {
    textDecorationUnderlineWhiteArr.push(textDecorationUnderlineWhite[i])
}
switchTheme.addEventListener('click', function () {
    allInDarkThemeArr.forEach(item => item.classList.toggle('lightTheme'));
    whiteBgThemeArr.forEach(item => item.classList.toggle('darkBgTheme'));
    whiteColorThemeArr.forEach(item => item.classList.toggle('darkColorTheme'));
    contentCardDarkArr.forEach(item => item.classList.toggle('contentCardWhite'));
    whiteFillThemeArr.forEach(item => item.classList.toggle('darkFillTheme'));
    whiteStrokeThemeArr.forEach(item => item.classList.toggle('darkStrokeTheme'));
    buttonsTabsArr.forEach(item => item.classList.toggle('lightMood'));
    sectionTitleTopArr.forEach(item => item.classList.toggle('sectionTitle-top-light'));
    textDecorationUnderlineWhiteArr.forEach(item => item.classList.toggle('text-decoration-underline-white-light'));
    darkThemeContact.classList.toggle('lightThemeContact');
    lightWord.classList.toggle("show")
    darkWord.classList.toggle("show")
    this.classList.toggle("ChangeBgCircleItemDark")
    barcodeInDark.classList.toggle("d-none")
    barcodeInLight.classList.toggle("d-none")
    topButtonBg.classList.toggle("topButtonBg")
    topButtonArrow.classList.toggle("topButtonArrow")
    topButtonLine.classList.toggle("topButtonLine")
});

// Make Fn To Show When Theme Changed

(function themeWhenChange() {
    let loaderLayout = document.getElementById("loaderLayout")
    switchTheme.addEventListener('click', function () {
        loaderLayout.classList.toggle("show")
        ChangeBgCircle.classList.remove("show")
        loaderLayout.classList.remove("d-none")
        setTimeout(() => {
            loaderLayout.classList.toggle("show")
            ChangeBgCircle.classList.add("show")
            loaderLayout.classList.add("d-none")
        }, 800);
    });
})()

// topFunction

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        topButton.style.opacity = "1";
    } else {
        topButton.style.opacity = "0";
    }
}

AOS.init({
    once: true,
    duration: 1100,
    offset: 200,
});