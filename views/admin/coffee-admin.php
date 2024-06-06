<?php
include ('../../helper/auth-helper.php');

include ('../templates/database.php');

$sql = "SELECT * FROM coffee";
$result = mysqli_query($connection, $sql);

$coffees = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $coffees[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'description' => $row['description'],
            'image_url' => $row['image_url']
        ];
    }
} else {
    echo "0 hasil";
}

mysqli_close($connection);

$title = "Admin | Coffee";
include ('../templates/sidebarAdmin.php');
?>
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <a href="<?php echo BASE_URL; ?>/views/admin/coffee-add-admin.php"><button type="button"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Add</button></a>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-16 py-3">
                            <span class="sr-only">Image</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($coffees as $coffee) { ?>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="p-4">
                                <img src="../../public/images/<?php echo $coffee['image_url'] ?>" class="w-16 md:w-32 max-w-full max-h-full"
                                    alt="Apple Watch">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                <?php echo $coffee['name'] ?>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                <?php echo $coffee['description'] ?>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                <?php echo $coffee['price'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <a href="<?php echo BASE_URL; ?>/views/admin/coffee-edit-admin.php?id=<?php echo $coffee['id'] ?>"
                                    class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="<?php echo BASE_URL; ?>/views/admin/coffee-delete-admin.php?id=<?php echo $coffee['id'] ?>"
                                    class="font-medium text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>