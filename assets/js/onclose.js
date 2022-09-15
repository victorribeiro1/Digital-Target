var preventClose = function (e) {
    e.preventDefault();
    e.returnValue = '';
}

fd.spRendered(function(vue) {
    window.addEventListener('beforeunload', preventClose, true);
});

//remove event listener before submitting the form 
fd.spBeforeSave(function(spForm) {
 window.removeEventListener('beforeunload', preventClose, true);
});