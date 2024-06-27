function activeElement(itemClass, itemClassWithDot) {
    const Items = document.getElementsByClassName(itemClass);
         
    const toggleMenuClass = function() {
        document.querySelectorAll(itemClassWithDot).forEach((item, i) => {
            if (item !== this) {
                item.classList.remove("active");
            }
        });
        if(!this.classList.contains("active")) {
            this.classList.add("active");
        }
    }
    Array.from(Items).forEach(function(element) {
        element.addEventListener('click', toggleMenuClass);
    });
}

export default activeElement;