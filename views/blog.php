<?php

include ('templates/database.php');

$sql = "SELECT * FROM blog";
$result = mysqli_query($connection, $sql);

$blogs = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $blogs[] = [
            'id' => $row['id'],
            'image_url' => $row['image_url'],
            'title' => $row['title'],
            'description' => $row['description'],
            'article' => $row['article']
        ];
    }
}

mysqli_close($connection);

$title = 'Teskop | Blog';
$page = 'blog';
include 'templates/navbar.php';
?>

<section>
    <div
        class="max-w-screen-xl px-4 py-20 mx-auto grid lg:grid-cols-3 gap-8 lg:py-24 lg:px-6 items-center text-start place-items-center">
        <?php
        foreach ($blogs as $blog) { ?>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="../public/images/<?php echo $blog['image_url']; ?>" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $blog['title'];?></h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Peningkatan signifigan pada tren minum kopi
                        terjadi terutama pada kalangan genZ</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#b7292e] rounded-lg hover:bg-[#97151b] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php
include 'templates/footer.php';
?>