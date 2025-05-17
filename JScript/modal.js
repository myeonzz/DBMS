function openEditModal(studentnum, fname, lname, course, email, bday) {
    document.getElementById('editModal').style.display = 'block';
    document.getElementById('modalStudentNum').value = studentnum;
    document.getElementById('modalFname').value = fname;
    document.getElementById('modalLname').value = lname;
    document.getElementById('modalCourse').value = course;
    document.getElementById('modalEmail').value = email;
    document.getElementById('modalBday').value = bday;
}
        
function closeEditModal() {
    document.getElementById('editModal').style.display = 'none';
}
        