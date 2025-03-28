const backgrounds = [
    "background-color: #f9f470;",
    "background: repeating-radial-gradient(#44491a, #0d3110 130px);",
    "background: linear-gradient(179deg, #44491a, #0d3110);",
    "background: linear-gradient(268deg, #0c2103, transparent 620px);",
    "background: initial;"
];

const fontColors = ["#ff5733", "#33ff57", "#3357ff", "#f1c40f", "#8e44ad", "initial"];
const fontStyles = ["Courier New, monospace", "Georgia, serif", "Times New Roman, serif", "Verdana, sans-serif", "Arial, sans-serif"];

let bgIndex = 0;
let colorIndex = 0;
let fontIndex = 0;

function changeBackground() {
    document.body.style = backgrounds[bgIndex];
    bgIndex = (bgIndex + 1) % backgrounds.length;
}

function changeFontColor() {
    document.body.style.color = fontColors[colorIndex];
    colorIndex = (colorIndex + 1) % fontColors.length;
}

function changeFontStyle() {
    document.body.style.fontFamily = fontStyles[fontIndex];
    fontIndex = (fontIndex + 1) % fontStyles.length;
}