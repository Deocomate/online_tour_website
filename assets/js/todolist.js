let input_element = document.getElementById("input")
let tasklist_element = document.getElementById("tasklist-contain")

let tasks = ["Lam viec nha", "Hoc Css", "Hoc unity", "Hoc Sass"]

// Render giao diện
renderTaskHTML()

// Function declare
function addTask() {
    let taskToAdd = input_element.value
    tasks.push(taskToAdd)
    console.log(tasks)
    renderTaskHTML()
}
function deleteTask(task) {
    tasks = tasks.filter(taskItem => taskItem != task)
    renderTaskHTML()
}

function renderTaskHTML() {
    tasklist_element.innerHTML = ``
    for (const task of tasks) {
        tasklist_element.innerHTML += `<li>${task} <button onclick="deleteTask('${task}')">Xoá</button></li>`
    }
}
