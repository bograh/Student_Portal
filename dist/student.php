<?php
session_start();
error_reporting(0);
require("db_connect.php");

$sql = mysqli_query($con, "SELECT * FROM student");

if (strlen($_SESSION['id'] == 0)) {
    header('location: logout.php');
} else {

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Portal</title>
        <link rel="stylesheet" href="output.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,600&display=swap" rel="stylesheet">
    </head>

    <body class="bg-gray-50">
        <nav class="w-full h-20 md:h-24 lg:h-24 bg-white shadow-lg shadow-gray-100 flex flex-row items-center justify-between sticky top-0 z-10 lg:z-50 lg:grid grid-cols-2">
            <section class="px-2 flex flex-row justify-between lg:grid lg:grid-cols-2 lg:col-span-2 items-center">
                <a href="#" id="school_logo" class="font-poppins  text-xl text-slate-900 font-semibold col-span-1">
                    School Logo
                </a>
                <div class="flex flex-row justify-center items-center px-2 invisible lg:visible col-span-1 place-items-end">
                    <a href="#" id="avatar_lg">
                        <img class="h-16 w-16 border-full" src="https://img.icons8.com/color/48/circled-user-female-skin-type-6--v1.png" alt="" />
                    </a>
                    <div class="flex flex-col justify-evenly font-poppins">
                        <a href="#" id="user_name" class="font-bold text-lg md:text-2xl lg:text-lg px-2 text-slate-700">
                            <?php
                                $res = mysqli_fetch_array($sql);
                                echo $res['student_firstname'] . " " . $res['student_othernames'] . " " . $res['student_lastname'];
                            ?>
                        </a>
                        <a href="#" id="user_school_number" class="text-lg md:text-2xl text-gray-400 px-2"><?php echo $_SESSION['id']; ?></a>
                    </div>
                </div>
            </section>
            <section id="hamburger" class="px-2 flex flex-col lg:hidden">
                <a href="#">
                    <img class="w-12 h-12" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAM0lEQVR4nO3TsQ0AQAzCQPaf0bvkp/iQwifRuyGRdA0wP3c/QBLtG9IOkET7hrQDJGXZA5DCAs8nEq6yAAAAAElFTkSuQmCC">
                </a>
            </section>

        </nav>


        <main class="lg:grid grid-cols-5 bg-gray-50">
            <section id="nav_menu" class="flex flex-col py-6 lg:py-2 bg-gray-50 w-[0] h-screen  absolute lg:sticky lg:top-20 z-10 invisible lg:visible transition-all lg:justify-between lg:w-[25vw] top-0 ease-in-out">

                <div class="inner_menu flex flex-row  items-center pb-8  px-2 invisible lg:hidden transition-all ease-in-out">
                    <a href="#" id="avatar">
                        <img class="h-[4.5rem] w-[4.5rem] md:h-28 md:w-28 border-full" src="https://img.icons8.com/color/48/circled-user-female-skin-type-6--v1.png" alt="" />
                    </a>
                    <div class="flex flex-col justify-evenly">
                        <a href="#" id="user_name" class="font-bold text-lg md:text-2xl px-2">Adwoa Ewuara Mansah</a>
                        <h5 class="centered"><?php echo $_SESSION['login']; ?></h5>
                        <a href="#" id="user_school_number" class="text-lg md:text-2xl text-gray-700 px-2">2088345</a>
                    </div>
                </div>
                <div class="inner_menu grid grid-rows-6 gap-2 px-7 font-poppins text-lg md:text-xl lg:text-lg invisible lg:visible transition-all ease-in-out lg:sticky lg:top-[6.5rem] lg:bottom-0">
                    <a href="#" class="py-4 border-b lg:border-b-0 border-gray-400 flex flex-row items-center">
                        <img class="h-6 w-6" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA0ElEQVR4nO2UAQrCMAxFewodHinwAz3HPK44PU0lUiXK6mybzoENBMpK8l8/4zvXq6K89ztp94siogHAWVrOq4oD2DPziZmDNIArMx9WESeigZmnKD7pc3MnoF4O4CKvln9AfWvnBGbEH3fNIfBBvDkEvhBvBoEMcXMIFIibQaBCvBoCBuLFEPQaMsEiWOLOsBhWeItXaWdUemfSCQBHFa9JAL1srhdm7rtFK0U6asusAeLuccEw9xzIuSuZ6QDdge7A9h3ICZySme0C9PqrugEoVK/ceva0OQAAAABJRU5ErkJggg==">
                        <span class="px-1.5">Home</span>
                    </a>
                    <a href="#" class="py-4 border-b lg:border-b-0 border-gray-400 flex flex-row items-center">
                        <img class="h-6 w-6 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAB8ElEQVR4nMVVu24TURTcUGNAch1FATooQvILKSzvztwrkf0KSGnHorEs5R/yEhVyekxjQsEPBClN+AOcmH8IRBMfGz92724SpBzpSKv7OI85M3ej6KGtXq+vANgmeUDyi/kBgPfau3Ng7/0GgG8k/8oBDACcmg/G6yRPkiRZv03sJQC7JP+QvCTZALA6fyiO4+cAmgCGAK4AdHQ3GLndbj8ieWwV76dp+rioGpIVAEd2pxtMYpWr7Ubpfs1ItiyJOsnGXLCo8qx959wzAD8BnKdp+jTrjDoRXCTfZG1qoJd5sMRx/Hpq4K8CcA1Jfp3ZEN3KQENyK0mSt6EzAHaEhHNueXpx2ypbYIvMe18luSnXdxQw7/0LK/bdZNGE8yvvEoDuFDy9UAKLdzEzS6lTAgpUVbUOzgB8L0pgYuyVTjA2BS+TgOQPAJ/nIRr8xwQXMxCNhyz53zcBgJcLQzaaSmTN+ybgSNGzNLWNExNJJTRkjjyTrrVa7QnJ3wD6C5n15NqreBiiKf/RtZtx7qNiOOfW8iDoWIBWTgebeYID8MHutqOCf8FNtfYEV6ICEyyq3IJ/KvwnWJKOwTXU2yL557ClZZhfWeWFwSemJ1evov3ZVJ24fSoR6dvWxLx+LuZlTHQTpyUcyd98T2sLVHwIuwZa5C4tJSBiXQAAAABJRU5ErkJggg==">
                        <span class="px-1.5">About</span>
                    </a>
                    <a href="#" class="py-4 border-b lg:border-b-0 border-gray-400 flex flex-row items-center">
                        <img class="h-6 w-6 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC6UlEQVR4nO2ZXWiOYRjHf+ZzxLAkiQOfs1lTlEU5UEI7c4BoDsbJEFpKdkTKjnzswFdKDtd8TU4wiinNwcpnYhxoSGJMiLG9uvR/67byvs/7PrP7Vu+v7qP3vv7P/36f5/64rhty5PjvmAGsB/YC9cBBoBZYCgwhcAYDVcBDIJGiPQOWECiTgNuO2VdAI3AIqFGzN/NEv38FjgCLCIixjsGnQAUw6C9984ADfd5QAzCSADgtQ21AQYT+NphiYAfwVrHn8cxU4CfwAyjLIn4a0KnBrMAjm2XiXAyNPc4n5o0LMrExhsYcaTzHI60yUR5z2f4G9Pqc9O0aSFFMnS7p2ArohccyMDumzhfpjMETN2Ugzk49Xhqf8UiDTKyNobFQGvfxSK1M1MXQ2CmNY3hkuUxcj6FxSRrr8MhKmfiU5fF8GPBRGhV45IZM7EpxUEyFxeyWxjU8klx+szlnJSmTxiM8ckYmLKHKlk3SaMQjG2TihZKnTKlRrGlU4hE7J53VOalLuUZU8pyjiZ2eTcs7d2WoJIOYUsXYPAuGepnan0FMnWKOExDzZcqyvQkRz1fvFbOYwGiSMdtbClP0Gw1cUd9mAmQy8CZColWkPrajTydQ2iIMpNgp1AXLgwgDSeboHQRMu0zOTVNCSqimFSQTleWZySkp+hVoA/2uQQVFKXBPg7gcoX+jsxkuIABKlNl1O7VfK2ino9Cp2lul8hQwjwHGEqhVygp7ZaZHNeBMyjm2n5xUbLKgfQtYDQz9h/4ZAWx1TqsJlXFOpJnc6bBV7Kgzv6y9BLYD+f3o/3cWV6U7j+SD7LPYBozrx+cUAFucuWbttfKVbLLPPxgFXHSEWweoar6sz8VRk7xkxXCgRULvgDUMPJXOJ9eiYkXGHHZ24Fn4Xdo75MVuuzJipi5velQJ9E25vHTrxjgy+/QPXCUcmuXJrrwjc0dB1YRDtbPgROZDmrtyn60z6iDyAzCbSNNsc86RIwfR+AUnligdzeBw0AAAAABJRU5ErkJggg==">
                        <span class="px-1.5">Profile</span>
                    </a>
                    <a href="#" class="py-4 border-b lg:border-b-0 border-gray-400 flex flex-row items-center">
                        <img class="h-6 w-6 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABUUlEQVR4nO2aTU7DMBCFveIMsGDdO1BOEGWelUWOVH6u0iL1DvQqhR1IcAHQSB4JCYTBtadJ9T7J2xl/mSclshPCKRFjvATwICLvAD48V+q5BbA4WEJEXrwFflivupdiEZ1EKrTuuu48OKM9RWRjewilWJyOIWEMw3CRRN6Ki9hoq+7sGPsARerCiRiMVmUYLYPRmhqYyHtkNiLjOJ4BuBeR54pfzk8icqu13UQA3DX8cr5xE9Gnp31ijFcVay5tMp4TadIHVncqIgB2v0RndxIiIvI4G5GD64Ii/4MTycBolcJoZWC0SmG0MjBapTBaGRitUhitDIxWKYxWBkarFEbrrw/I63raYyLbdHa00fvu2o2+NWxVF8BCf59odcDsJvLlp5q1/nkwaxEP7DReT9Br1ez7/jqJ7IMXeiHTKr4AVm4iequkMjaZSmuvEnpj9QmU4mdxgvWUGQAAAABJRU5ErkJggg==">
                        <span class="px-1.5">Manange Devices</span>
                    </a>
                    <a href="#" class="py-4 border-b lg:border-b-0 border-gray-400 flex flex-row items-center">
                        <img class="h-6 w-6 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACFUlEQVR4nO2azU4UQRSFa4FsIKJb1sosCepGWcxqkjFV53SzqFeYNxDY44guNS7RB3HQxKeAsCL87WADuJMhN9wmhjChW6unS60vuckk1XWqbp9bPT03Y0ziH4dkC8AKyU2SWyTPNLYADAAs53k+Z2KF5DOSX0kOS8ZmnudPTSz0er17AD6SvJANAjgmucErWp1OZ0pCncoAfNJrhjrnQ7vdnmg0CWvtQwDfdFPnANa63e79u+bJNQBeA/hRuJNl2QPTlBO/lNKBlFZVDWvtPMlddfK7937SjBstJ9nAHsnZ39WRuQD2Vet92F2WO9hS3+ckF/5Uzzn3RMoMwE/5bMZFUVJyJgJq9lVzEErzrgVbxdOpzMEui/d+huSJaFtrH5u6IbmqB3wjtDaAz6r9KrT2bYsN1JEstDbJJU3kS2jt2xbb0UQe1Vi226ZuAJzKYt776dDa3vtpTeTU1E3xrvS36l+TEikJkyMVSaXVxI3y3k+SfAfgqMIvvloDwCGA9Uqv+iTfNr1xjo43pROR7GWSc+65iYQsy14UzsT3CKwIq+4rJVIzTI5EBpMjkcHkSGQwOXIDklb6vNLidM69bGB8GOSbvejRFj3fcY8zJXIDsVvumtwtAN1xjzMd9shgciQymByJDCZHIoP/rSPQvpb0kkwkAFjURA6qTFqPoKM4HBH90olIf1WSKZyJJORvIv1Rvd9Lwic75nR2KSMAAAAASUVORK5CYII=">
                        <span class="px-1.5">Change Password</span>
                    </a>

                    <a href="#" class="py-4 border-b lg:border-b-0 border-gray-400 flex flex-row items-center">
                        <img class="h-7 w-7 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEVUlEQVR4nO1a3Y9dUxTflCJBaUciRILEg5Z68MKD3ITgmL1+v30aNi/lQWJENLS+nujQhghNm4iH8k/gwUcrNIKqVJsG8TGqRJGqjydhKB1ZM+ukJ3fOnbn33H1nzkh/yUlu7j57rfXbX+tjH+eO43+KGONSEclJbiL5GoAvSf4G4C99SP6s/wF4A8BmEblZRIZcE9BqtU4VkdtJbgfwD8mJXh7tA+BNkndkWXbKnBOIMZ4mIg8B+LFk1N9qFIAnQggAsCKEcFbRx3t/NsnlJAngcQA7SB4pETsE4EEdnDkhQdKT/LpEYC/JO9XQXmUZuXsBfFwi9K2I3DTQZQRga0nhPgDXJxJ/AslVAD4rDdCLyWdneHj4XJJ7TMEfJO8bHR09cQBLdjGAx3SZmq7dqjuJcAAXAdhvgvUkWu4GDBG5GsB3pnN/COHCvgTqaBQkSL6X5/myXmUA2EVyZ6/9SJ5X7B21ofbM2J7YayR2xhhPryOnWPN1fROOkdlda8+QfKFYTuVjdC6JlGamWGZbXY0jVg343Xt/WU+dExNRALiqdABkrltnV/gJAGtdn0hBREFyvdn0TVdRgHpX6/BRjHGRawiRGONikp+bvAdmfFmZAvhBXw4h3OgSIBURBclbbJB/mnHjA1hdnBAuEVIScVMRwCdm4+qZlG43xXc1lIgDsMZkbusYwFkoPh5jXNJUInmeL7Oo+Yj6mSqFq2zKdqRSOggiCgDvqExN5Fw7LLNTpetdw4mQ3GByN01rBPBqR5YNIyJTKbXKfb1K4Zg25nl+aQplIyMjJ5N8qpS/bEmVzgJYYTLHqhp/MSI9R7hVaCNRJEsbU8j2U5mlyjw8rdEqHRMJR23SsdZ4PphNttpo745Pa9RQXXOOFCSMyME6RAC8P5ts9epFtprK3pmIPFNh6LMJfclE5dJS91/pYGqi1WqdZGQO66O/9b8UskMIl9uMfDGtkeSjAP4NIVzjGg4AwYi80imy3OO9v8Q1HAA22tJ62i1kYKpKqTMilS9orSrP8ysHUbNKhRjj0iJozLLszMqXANxjSdXdrqEAMNIxPGk7DV7WEMA1FDhWHrrVLVQAECNxsKsIhOT9WkRu0l6JMS4qpblruuqk8Q7JP1Nmiv2C5MO2N77quuKoIYD3/mLXEABYqQNL8qiIXFc3plmXMnTpFSIyRPKALannawnRQphN5zo3D4gxLrFlriR2aZHO9VENXzsfMyIiQwA+LArpKS98riX5kvf+/CQCZ98TB0oXPRckE64BWspSaqcjFsAjtrEn72WyLDtnEPd7K0vxzhbv/RWp5IcQhku3u0dJPjfwq+pSPrC5HzlW3dTYaV8pixwTkRvcHHpZFjdZVjE5pLdLpVLQGe1HucZwNggbALzd9sHA9xpRaF83XyD5pH0FMUnEvoD4tbh3JPluh2LDuH63EkK4bV4JzHIwbCuMI/mWEiP5qRquxLVa2DGfOA638PEf0XTi/mUDx94AAAAASUVORK5CYII=">
                        <span class="px-1.5">Session</span>
                    </a>
                    <a href="#" class="py-4 border-b lg:border-b-0 border-gray-400 flex flex-row items-center">
                        <img class="h-7 w-7 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABJUlEQVR4nO2ZTWrDMBCFtQhd5UJJF76A39NKJ+pP0ms15B6FJs0xUhQkUHeqrXHs8D4Y8Bg8w2MkPYOcE0IIcQ9CCE8kPwD8kLw2jgvJfYpL6/oAzgB2UYNLTa4Lj3cXVcWk7/tN62l777e5mWV9AGeXGzkjJqtPCalDExm7tEIIa5JfFSfFIX8D4Jjz8vlPI+v6HNgIwGdR7JDz8nmMEPy3vjZ7JdrslWizU5vdBurUWsqpFQY4b4mFs5eYOnuJhbOXyNnHImefu7O3hvf6jZ9MSGskpJLHn0gwdvbZCcFAZ59MSGskpBJNZLZLC+lawXu/NW1kAIDnVP8Uk13FUTv3eLtdvUUxeTILi1MUcbt6s6LruhWAVwDfKV7iO7OGQgjhlsQve/WFyJJJJxAAAAAASUVORK5CYII=">
                        <span class="px-1.5">My Study</span>
                    </a>
                    <a href="logout.php" class="py-4 border-b lg:border-b-0 border-gray-400 flex flex-row items-center">
                        <img class="h-7 w-7 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADpUlEQVR4nO1aSWsUQRSu4Aruux4UvSmKC/6APkXLdH1f9ah9cLmJ0VOM8e6CIqjoQYk/RFHx4gpJ3JeIW1TEDRXx6IKC8jKvoQlEMpOe6engB00YMv2mvvreq3rvVRnzHyMUcRxPAbCe5GEA50g+B/CJ5A8AP0l+JflE/3cMgA/DcJppBLS2to4huYXkRR3sn0oeAL/13a3W2nF1JyA/CmAPyXepgf0CcAnAAefcBufc4lKpNFu+K4Rl9qMoWuKci0juBXBZ1EqRek+yIwiC8XUh4b1vEbdJDeAhgG1xHE+vwtZUktsB3E7Ze+GcW1dTFUieTinQC8AaY5qysC+2ANxL2e/MXJ1SqTQPwC39ge8A2oMgGF2DBWMUyV0Avqk6twDMycS4c24Byb5EdpKrTI0BYDmAZzpxfQAWDVsJkq+T2YmiaIapE6IomgGgJ0VmznBiolsNdcs+YeqM5ubmCQkZmciqYgbACSXx2lo7y+SEqKxM4madFRsgeUR25jAMV5icgXLMJAuArJTFBYD2JF7qtmnWAkEQjCZ5X1VpN0WGL2cVQuRDVapIzkSyC8BVky+aSN4RMt77zdWQ6NWZuGFyhvd+h8bKhapIyF/5bHJGGIbTtGT4NaS9TfYOyWyVxJOWlpa5pkEA4Kq6FwqnRBoA9qurHzVFVCIByZISOWOKqEQCAEuVyFNTRCUSOOdm6jg/m4FIl5s1fK6bDGDLmbnY+5ELEQDXak7EDnAtKapMg8JaO2tQ1xoxwV4kZVDuaA6+/I6oDbEIykBTFABuSC80ojJxHE9PkkZr7eQhvziAzE2TM0ju1LGcr/hlIaP7TLfJF00A7qpbbTJFBQCnJN7mcgyRYfPhgbpVmykqSHaoGs8qUqORGnTe+5VyCiBEnHNrKnoZwPGkZZrnsmvLeVX/aQDJk9VmmF0qZ4+cLpk6I47jidK5STo4VQe4FFckX+ls3KnnsYItZxb9JOSob9he4b2fn+qGv4yiaHVmo/13TPQlJLz3CzMxrMrcTB297ZGTWlObJbYjCWxRJPP4jON4LMlTqYrvkZ6+NmXUCg1T+0R/YNd00/Per5WCJk0IQKs0BKpJACV3StIOqitVvMQOU53dAN4MuMVwBcBBkhvlcoC4pHTN5fuyUIRhuEyLon2SiqdvS0jaQbItl9RD4kSSN8lE07cYKnjktsQ5sdEwuRPJSdIBBHCI5Fl1v4+6OPwE8AXAYylPpbKTvm1F9cR/mGLhL2Fx934YKKAwAAAAAElFTkSuQmCC">
                        <span class="px-1.5">Log out</span>
                    </a>
                </div>
                </div>

            </section>

            <section class="items grid w-screen lg:w-auto lg:col-span-4 place-items-center">
                <section class="grid  grid-cols-2 md:grid-cols-3 py-2 place-items-center text-lg md:text-xl px-2 font-poppins">
                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-1.5 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="h-10 w-10" src="https://img.icons8.com/fluency/48/signing-a-document.png" alt="" />
                        <span>Course Registration</span>
                    </a>
                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="h-10 w-10" src="https://img.icons8.com/color/48/replace--v1.png" alt="" />
                        <span>Option Change</span>
                    </a>

                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="w-10 h-10" src="https://img.icons8.com/color/48/purchase-order.png" alt="" />
                        <span>Registration Slip</span>
                    </a>
                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="w-10 h-10" src="https://img.icons8.com/color/48/ratings.png" alt="" />
                        <span>Check Results</span>
                    </a>

                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="h-10 w-10" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAjUlEQVR4nO2WQQqAMAwE92N5mO/y6j8kb8jZc/2Aom0oap2BvZXSJROoBPA826LSEr0FCvTEPMpVYlJT7MbdFLA/TMA6RhRwJlBQKAMKOQrlGE4hzWtVDh9VczYLBZwJ5BhuiY0CwQSqQCFniXMMp5D4CwWfuX8rZF9fYqNAMIEqUMhZ4hwo5CgEADpnB+bqVQEWKunqAAAAAElFTkSuQmCC">
                        <span>Assess Lectures</span>
                    </a>
                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="w-10 h-10" src="https://img.icons8.com/color/48/cash.png" alt="" />
                        <span>Bills and Payment</span>
                    </a>

                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="h-10 w-10" src="https://img.icons8.com/color/48/fingerprint.png" alt="" />
                        <span>Biometric Registration</span>
                    </a>
                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="h-10 w-10" src="https://img.icons8.com/color/48/graduation-cap.png" alt="" />
                        <span>Graduation</span>
                    </a>

                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="h-8 w-8" src="https://img.icons8.com/color/48/report-card.png" alt="" />
                        <span>Transcript Request</span>
                    </a>
                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="h-10 w-10" src="https://img.icons8.com/color/48/e-learning.png" alt="">
                        <span>Virtual Classroom</span>
                    </a>

                    <a href="#" class="flex flex-col justify-evenly h-28 w-[45vw] md:h-36 md:w-[30vw] lg:w-[22vw] border mx-2 my-1 px-2 py-2 md:my-1.5 bg-white rounded shadow-sm lg:hover:bg-gray-50 delay-200 ease-in-out">
                        <img class="w-10 h-10" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABUElEQVR4nO3TMU7DQBAF0G2oCQqnCHR0NFEyQ0UHVwjiCJRQhRmClDbJIRLBjmloAxT4COQGBo4A2nWCgrV2cLxOgTySJXtt/7caj5WqqqqqfNbxtewAywhYPpDlq4wDTDbJsNmf1Cx6MAy3gCUsC3RsIDSmQg46dpH0W7v30Eh2A0mfpQSMsrrYJjlfzm3R3R6yzOL3g44C0tP4ATlxBSDrJxfcIjnMgoH1SzIXboJTu2nSU4Uskb3ojuvuAPd3N3ORBSPJZzIXuuP6/P1oo3Dz9n73By6r1UjyvKLVQTxcLDMzAN6Ha5571NP7v4Zr478T6Vf7O9ne9yc1ZD0A0u8lopExkB63szrl/m4pocn7QEK5w33A3nHMAXvFMSfsDcc1YC84rgkXxv8AX7jWC9cqOIn7h0kus4DFPa8wsL5aXJvzNGD5ucLlCvMKqP9c37VA9YMlTLB/AAAAAElFTkSuQmCC">
                        <span>Alumini</span>
                    </a>

                </section>
            </section>
        </main>


        <footer class="flex justify-center items-center h-12 bg-gray-50">
            <span class="font-poppins text-lg py-10">Made by g.elvis &#128526;</span>
        </footer>
    </body>
    <script src="indexjs.js"></script>

    </html>

<?php } ?>