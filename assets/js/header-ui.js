// lay phan tu ve
let tagsHTML = document.getElementsByClassName("tag-navbar-super")
let tagContentForeign = document.querySelector(".foreign")
let tagContentDomestic = document.querySelector(".domestic")
let tagContentHighClass = document.querySelector(".high-class")
for (let tag of tagsHTML) {
    tag.addEventListener("mouseover", () => {
        let tagId = tag.getAttribute("id")
        console.log(tagId);

        if (tagId === "tag-foreign") {
            tagContentDomestic.classList.add("d-none")
            tagContentHighClass.classList.add("d-none")
            tagContentForeign.classList.remove("d-none")
        } else if (tagId === "tag-domestic") {
            tagContentDomestic.classList.remove("d-none")
            tagContentHighClass.classList.add("d-none")
            tagContentForeign.classList.add("d-none")
        } else {
            tagContentDomestic.classList.add("d-none")
            tagContentHighClass.classList.remove("d-none")
            tagContentForeign.classList.add("d-none")
        }
    })
}