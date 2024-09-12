function validateForm(inputs, type) {
  const formData = new FormData(inputs);
  const username = formData.get("username")?.trim();
  const password = formData.get("password")?.trim();
  const repassword = formData.get("repassword")?.trim();

  if (!username || !password || (type === "register" && !repassword)) {
    return "Please fill out all fields!";
  }

  if (
    username.length < 6 ||
    password.length < 6 ||
    (type === "register" && repassword.length < 6)
  ) {
    return "Username and password must be at least 6 characters long!";
  }

  if (type === "register" && password !== repassword) {
    return "Passwords do not match!";
  }

  const invalidChars = /[^a-zA-Z0-9]/;
  if (
    invalidChars.test(username) ||
    invalidChars.test(password) ||
    (type === "register" && invalidChars.test(repassword))
  ) {
    return "Username and password should not contain special characters!";
  }

  return "";
}

function handleSubmit(event, type) {
  event.preventDefault();

  const messageError = validateForm(event.target, type);

  if (messageError) {
    alert(messageError);
  } else {
    event.target.submit();
  }
}

const formLogin = document.getElementById("login");
if (formLogin) {
  formLogin.addEventListener("submit", function (event) {
    handleSubmit(event, "login");
  });
}

const formRegister = document.getElementById("register");
if (formRegister) {
  formRegister.addEventListener("submit", function (event) {
    handleSubmit(event, "register");
  });
}

function validateFormRecipe(inputs, type) {
  const formData = new FormData(inputs);
  const title = formData.get("title")?.trim();
  const image = formData.get("image");
  const recommend = formData.get("recommend")?.trim();
  const description = formData.get("description")?.trim();

  if (!title || title.length < 5) {
    return "The title must be at least 5 characters long!";
  }

  if (type === "add" && (!image || image.size === 0)) {
    return "Please upload an image!";
  }

  if (!recommend || isNaN(recommend) || recommend < 1 || recommend > 5) {
    return "Please provide a valid recommendation between 1 and 5!";
  }

  if (!description || description.length < 10) {
    return "The description must be at least 10 characters long!";
  }
}

function handleSubmitRecipe(event, type) {
  event.preventDefault();

  const messageError = validateFormRecipe(event.target, type);

  if (messageError) {
    alert(messageError);
  } else {
    event.target.submit();
  }
}

const addRecipe = document.getElementById("addRecipe");
if (addRecipe) {
  addRecipe.addEventListener("submit", function (event) {
    handleSubmitRecipe(event, "add");
  });
}

const editRecipe = document.getElementById("editRecipe");
if (editRecipe) {
  editRecipe.addEventListener("submit", function (event) {
    handleSubmitRecipe(event, "edit");
  });
}
