<?php
include ('../../helper/auth-helper.php');

include ('../templates/database.php');

if (isset($_POST['add'])) {
    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $tmpName = $_FILES["gambar"]["tmp_name"];
    $error = $_FILES["gambar"]["error"];

    var_dump($namaFile);
    $id = $_POST['id'];

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $folderTujuan = "../../public/images/";
    move_uploaded_file($tmpName, $folderTujuan . $namaFile);
    $linkGambar = $namaFile;

    $result = mysqli_query($connection, "INSERT INTO coffee(name, price, description, image_url) VALUES('$name','$price', '$description','$linkGambar')");

    header("Location: coffee-admin.php");
}

$title = 'Admin | Coffee add';
include ('../templates/sidebarAdmin.php');
?>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <form action="<?php echo BASE_URL; ?>/views/admin/coffee-add-admin.php" method="post"
            enctype="multipart/form-data">
            <p class="font-semibold text-xl">Add</p>
            <br>
            <div class="grid gap-6 mb-6 md:grid-cols-2 w-[60%]">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Type here" required />
                </div>
                <div>
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="text" id="price" name="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rp 0" required />
                </div>
                <div>
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <input type="text" id="description" name="description" value="<?php echo $coffees['description'] ?>"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Deskripsi" required />
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="gambar">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or
                        GIF (MAX.
                        800x400px).</p>
                </div>
            </div>
            <button type="submit" name="add"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Submit</button>
            <a href="<?php echo BASE_URL; ?>/views/admin/coffee-admin.php"><button type="button"
                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Cancel</button></a>
        </form>

    </div>
</div>


<?php
include ('../templates/footer-admin.php');
?>