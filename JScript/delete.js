
    function openDeleteModal(studentNum, firstName, lastName) {
        document.getElementById("deleteModalStudentNum").value = studentNum;
        document.getElementById("deleteConfirmMessage").innerHTML = 
            "Are you sure you want to delete <strong>" + firstName + " " + lastName + "</strong> (Student #" + studentNum + ")?";
        document.getElementById("deleteModal").style.display = "block";
    }
    
    function closeDeleteModal() {
        document.getElementById("deleteModal").style.display = "none";
    }
    
    function confirmDelete() {
        var studentNum = document.getElementById("deleteModalStudentNum").value;
        window.location.href = "delete.php?studentnum=" + studentNum;
    }
