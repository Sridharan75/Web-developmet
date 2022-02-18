








  function lockScroll() {
    var lockX = window.scrollX;
    var lockY = window.scrollY;

    function lockIt() {
        window.scrollTo(lockX,lockY);
        return false;
    }

    window.addEventListener("scroll",lockIt,false)

    return {
        stop: function(){
            window.removeEventListener("scroll",lockIt,false)
        }
    }
}

var locker = lockScroll(); // locks scrolling

locker.stop();  // unlocks scrolling