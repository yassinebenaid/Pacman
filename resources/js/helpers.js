window.addEventListener("test", (e) => {
    Swal.fire({
        title: e.detail.title ?? "Error !",
        text: e.detail.message ?? "somthing went wrong !",
        icon: 'error',
        confirmButtonText: 'OK'
    })
})

window.addEventListener('should:scroll', () => {
    window.scroll({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
})
