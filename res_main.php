<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>TransNET</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    sans: ["Oxygen", "sans-serif"],
                    serif: ["Merriweather", "serif"],
                },
                extend: {
                    colors: {
                        //Define Trans flag colors
                        TPink: "#F5A9B8",
                        TBlue: "#5BCEFA",
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-slate-800 text-white min-h-screen flex flex-col">
    <!--Menu Bar-->
    <?php include "include/menu.php";?>
    <!--Content-->
    <div class="mx-4 flex-grow divide-y divide-dashed divide-slate-500">
        <!--Section-->
        <div class="justify-items-center">
            <div class="sticky top-16 py-4 text-center text-2xl bg-slate-800 bg-opacity-95 backdrop-blur-sm">
                Title
            </div>
            <div class="grid grid-cols-5 gap-4 flex-wrap py-4">
                <?php 
                require_once 'classes.php';
                $json = file_get_contents("test.json");
                $dcJson = json_decode($json);
                foreach ($dcJson as $tile => $value) {
                    $title = $value->title;
                    $description = $value->description;
                    $pdfUri = $value->pdfUri;
                    $dispTile = new ResourceTile($title, $description, $pdfUri);
                    echo $dispTile->display();
                }
                ?>
            </div>
        </div>
        <!--Section-->
        <div class="justify-items-center">
            <div class="sticky top-16 py-4 text-center text-2xl bg-slate-800 bg-opacity-95 backdrop-blur-sm">
                Title
            </div>
            <div class="grid grid-cols-5 gap-4 flex-wrap py-4">

                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    Title
                    <div class="text-base text-justify">
                        Description and thing and other things ect
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none
                            focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Footer-->
    <?php include "include/footer.php"; ?>

</body>

</html>