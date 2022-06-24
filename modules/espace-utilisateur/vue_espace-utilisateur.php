<?php

    class VueEspaceUtilisateur {

        function __construct(){
            ?><link rel="stylesheet" href="__DIR__/../styles/espace-utilisateur.css"><?php
        }

        function affichageProfil($utilisateur){
            ?>
            <main>
                <a class="deconnexion" href="<?=PATHBASE?>//connexion/deconnexion">Se déconnecter</a>
                <div class="informations">
                    <div class="information_image"> 
                        <img src="<?php 
                            if(isset($utilisateur[0]['image'])) {
                                echo PATHBASE.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'img_utilisateur'.DIRECTORY_SEPARATOR.$utilisateur[0]['image'];  
                            }else{
                                echo PATHBASE.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'avatar_defaut';
                            } 
                            ?>"/>
                    </div>
                    <div class="informations_ecrite">
                        <p><?php echo $utilisateur[0]['prenom'].' '.$utilisateur[0]['nom'] ?></p>
                        <p><?php echo $utilisateur[0]['email'] ?></p>
                        <p>Silver</p>
                    </div>
                </div>

                <div class="suivi_perso">
                    <a href="<?=PATHBASE?>/espace-utilisateur/suivi">Mon suivi personnel</a>
                </div>
                
                <div class="plus_information">
                    <a href="<?=PATHBASE?>/espace-utilisateur/modification-information">
                          <div>
                            <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35.8323 13.4135C34.0898 10.357 31.7521 7.63686 29.124 5.31157C25.8569 2.21118 21.3412 0.32463 16.8254 1.11435C12.905 1.59696 8.86839 2.66454 5.9208 5.44319C2.17461 8.96768 -0.642292 15.0076 0.330556 20.2139C0.83876 24.7182 5.10768 26.9119 9.26043 26.6487C9.34755 26.6487 9.44919 26.6487 9.53631 26.6487C9.31851 27.3214 9.36207 28.1111 9.28947 28.7838C9.21687 30.8312 9.24591 32.8933 9.24591 34.9407C9.10071 36.7688 10.3785 37.7925 12.0483 38.0557C13.4422 38.2751 14.8797 38.202 16.2882 38.202C19.0615 38.1435 22.2995 38.2312 24.3759 36.0668C26.4377 33.8878 26.1909 30.6411 26.4523 27.8479C26.4668 27.6724 26.4668 27.4822 26.4377 27.2921C30.5469 27.4969 35.3095 26.3708 36.9939 22.1736C37.9522 19.3072 37.1681 16.0459 35.8323 13.4135Z" fill="#F3BD47"/>
                            </svg>
                            <p>Modifier mes informations</p>
                        </div>
                    </a>
                    <a href="">
                        <div>
                            <svg width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="51" height="50" rx="8" fill="#9FB990"/>
                            </svg>
                            <p>Mes recettes postées</p>
                        </div>
                    </a>
                    <a href="">
                        <div>
                            <svg width="37" height="35" viewBox="0 0 37 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35.6816 7.4381C35.1935 6.10204 34.4753 4.8517 33.5479 3.77285C31.1282 0.95067 27.4674 0.264774 24.0576 1.3865C22.3841 1.93665 20.8221 2.86546 19.4763 4.02291C18.3676 4.98031 18.1654 4.62307 17.0288 3.78714C16.0595 3.07981 15.0624 2.40105 14.0304 1.79375C13.5771 1.52939 13.1169 1.27218 12.6358 1.08642C12.587 1.06499 12.5381 1.0507 12.4893 1.02926C8.80758 -0.313951 4.30999 1.67943 2.21808 4.88743C0.223797 7.93824 -0.1388 11.9607 0.886234 15.4331C3.34771 23.771 11.2691 28.0579 17.231 33.4879C17.6494 33.8665 18.4373 35.0454 19.037 34.5453C20.9825 32.8877 23.0604 31.5231 25.0477 29.9226C27.2373 28.165 29.1339 26.1002 31.0166 24.0139C33.3805 21.3989 34.8797 18.5553 35.9257 15.1759C36.7136 12.6538 36.5881 9.8959 35.6816 7.4381Z" fill="#BD5338"/>
                            </svg>
                            <p>Mes recettes favorites</p>
                        </div>
                    </a>
                </div>

            </main>
            <?php
        }

        function dashboard($statistiques){
            ?>
            <main class="espace-utilisateur">
                <a href="<?=PATHBASE?>/espace-utilisateur">
                    <div class="retour">
                        <img src="fleche_gauche.png" />
                    </div>
                </a>
                
                <section class="suivi">
                    <article class="pres-slot">
                        <h1>Mon suivi</h1>
                        <h2 class="dashboard-perso">Tableau de bord</h2>
                    </article>

                    <article class="widgets">
                        <div class="co2">
                            <div class="widget-perso">
                                <p><?=$statistiques['co2']?></p>
                                <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="75" height="75" fill="url(#pattern0)"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_887_5209" transform="scale(0.015625)"/>
                                    </pattern>
                                    <image id="image0_887_5209" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>
                            </div>
                            <div class="legend-widget">
                                <h3>C02</h3>
                            </div>
                        </div>
                        <div class="eau">
                            <div class="widget-perso">
                                <p><?=$statistiques['eau']?>L</p>
                                <svg width="75" height="76" viewBox="0 0 75 76" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="75" height="76" fill="url(#pattern0)"/>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_887_5214" transform="translate(-0.00666667) scale(0.0158333)"/>
                                </pattern>
                                <image id="image0_887_5214" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                </defs>
                                </svg>
                            </div>
                            <div class="legend-widget">
                                <h3>Eau</h3>
                            </div>
                        </div>
                        <div class="economie-financiere">
                            <div class="widget-perso">
                                <p><?=$statistiques['economie']?>€</p>
                                <svg width="77" height="74" viewBox="0 0 77 74" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="77" height="74" fill="url(#pattern0)"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_887_5219" transform="translate(0 -0.0202703) scale(0.015625 0.0162584)"/>
                                    </pattern>
                                    <image id="image0_887_5219" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABAEAYAAAD6+a2dAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAABgAAAAYADwa0LPAAAAB3RJTUUH5gQODwYOoyhOcAAAFRxJREFUeNrtXWdAVFcW/s4bUJReRk3sDbsxscUgVSMqmtWNq9FYAiPW2BVrNNZYWWMvgBhr1MRkCRpslAmWqMkmKirWRGwURUClzMzZH84ddxmfg4I83N3vjzLv3PvOOfe+d8s593uE1xx3Dx1uM7hp5cqUIZ1AsKen9BnN4p3NmiGNdmCEuzsnoypm1a9Py3kjDru6shu+YbWjIx4inwbZ2ZkqskU53pyTQ+dQkdpmZvIX9C0e37uH8jyPlycnw549qHtyMg/Dexx15ozhr+XWliuv1Vbx92ixzj81VWk/vCxIaQWKigybhIGaZW3a8DD9ZqBfP36X1uNQp07ogIZ4s1EjxRTbhqUYmJREh6kizTpwAINwlZpv3+7Wy/vUxhUnTyrtN0socx0gI/pE3Y9HOTiwNveBzcBhw3gKt0F3jQYFCEGAu7vS+hUZ1liM6ORkWkg/Iyo8nDxtHHO/WrfONaDtlW0rs7KUVk9A8Q6QNf9Q5MAerq65IVYfWpefMIFiqToujRiBt/k7vO3oqLR+JYYDsMN7mZn0Jr6lqWvWWJcvv5knL1vm+F67m+ET7t1TSq1S7wDMzLNYktLTE3xvBg8ejMk4y0MXLMAi3oN1rq4vXGECdUBjvR4PuDt+Pn0aHXgvD9FqsQWgNy5cwCzJjv68eFG/DymolZJi01Y6a/1lZqajQwUbvS4nB6iw6P59ogdZ98a4qW1tc08YmhaMcXJSRVIt9qleHU30mTji7k5zaCKsGzXidbiCGe3bw5Gi0KZlS3jxYSSpVC/s+ClwwpH0dK7NbyF66lS36T6o1igigohoNhkMpdUepdYB0jzjD3xypX59+GOpKm/LFgzlaVjWtm2RK1iPBGQWFMADFzFl/35O5a10dMsWq466g9LZgwddXN/vtGHjgwelZc+9jIMHhgQ7Oup01tZ6fadOlIQwDO/fH4logIVdumAovOBkbV3kCmeiDXYdP84+XAGfDxhQqY8vhU+4fPlV2/HKO0Da5bj9g/f07YsK+JW169ejHN5Djr29xYKTqReGZWQgAPeRsGKFLlOyMeSuXfuGxvPhpulpaa9a75fF7XCtbeB8tdqqnWEy+YwYgS2cQBtGj8Z4zICVi4vFCm5iLkKysvAbH2LHoUPVg3wposrOna9K3xLvAOIVnzEuDimhoaE8neKRNGaMRUXaYQ6uP3rEFakbtixYwNMN48r/9OWXlfr40preOTmvygGvGundf0oLmmRvz211a6WUsWMpGhIvmzqV/4H2+KxCBYt+qYooTAkNdc3zXlqt3qRJJT1ElFgHYMO5Xn/rVa5cek7aWPuBkZHIg46+79vXYkEH6skBP/ygK2e4p+85atQb5Eub6fr1ktKrrOFOTPz9wRdq17aawiO40apVfABDEdS1q+WC+Ap3tm93a6LOyqoQGEhSkz279+TnF1efYncA0fAZLdOsHb7Zu9eSQTSZ/BGdl0fbDbmYNHGia64vhU9YtarEPV3GwcwMEKU7JDQe7DJqFIK4Cu9YsgQzMAu7ypWTK0edsB4R+/a5nlYXZH3Ys2dxO4JUHANmsSSJJ95iT7bFaey5fZsX6fdTNw+P/9WGFyAiApjV2d7nw+6tWEGelC1Ft29PteGGfnfuyJUTfk4/l+bg8HjTJtEOL6vHSxcUY7ylVz21Qk3kXr6s11IQnfDwUKv9/MLCTp8uPVe/HhA7h/r+qvuGeh4ewm+yBapgIKr065dRPn5iyuUlS172vi88BJhm9Y6owPu3b5et2GiAYTHX0m319KzUx5c2k3zPLi2kzYutF6QLCMD7Uj49WL8edzkGPZjZDzacPWRIJTuf2hH/3L9faT1Tv47lQVylihRC1636a7V8Cn/Apl492QKedIgv9OmjvuA9LyJx166i3qfIb4DUr2NZs6xePeRgKTdbt05OjrpjPs9MTeUadEk/p2vXstLwJjSnKPJdtw51+CuEVK2KdrgL92rVaAe+p5nr1yutnoDwm24DOdFnnTqJIVS2wO/cnU6Gh6ed0A4Iti/6lrnFDiDGGHpIPfHztm2ois+w2MGhsJyY3HGUYao0t2tXtda7U2TdS5eUdqQZjA1u9nsPtEB09epKq1cYVfy9ncMaXrtG+2iHNOgvfxF+NhN8gMcYYGeHBXp/w+eRkUWdG1gUyKiecCVlZHAwumMs7Nq0kRWcCi0NnjDh/2P8q4GYI/Bu1KH8kBBZwTBUQ1K7dulvJnyQ0vGTTyzVK9sBRJCGO+FdBM6fL1uDcR3vVt+7Tdi81auVdlRhZIyPSx/c9P3300fFDdWEhIdbkhdyopzS+heGW5ZXUti9lSvFclBOjlqxF7ouXJiZqdUOH+7sLCcn2wHyIqxPWgVMnCgXpKEP8BPmPn6sj8NVqfHo0Uo7RkDMVdK7xxVoErVaw1Sc5bYHDvBM9EVGUJCl8kJOlEtvGbcz6HFCgmkOpDDE8lHVRb8alUeMoHoUgM4PH5rZEYHWSFKrdfMMUfk+48fL1WfWAUQ8HmuxjdYOHy7rqIdUEZg/X4xRSjsm9etYDqrdvj01oI7odvo0RyAREe3bF7de/hFV6FNPT1FvavcjdzUnPTyUttd5QQeX8Dt//MERyMWfixfL6l+VXThg5EixJV34ulkHEIkYsvF4Y5BG7NUr7QgRZSRnyZmcf/hBbpJabBjrpVGqBhgaHW2KbioMycamVu715cuxFcf5y/v3zQT6410a4+wM6CKBYcPMyhf+gQPxJhKe86o0RufKSpCGGmOlasimTRYTSB7gMS5GRcGNvRHm66v/JX9UfpSdnfiXguDBLn5+Yk4jW4/xPuTEvqo7ERFK22/KMBrLk8l2xQpZwYOoSB8HB5v5T/xH5NwZbhiCkHTihFkFxni87g3VIsM7VasqHZbNaBrLgX907GiIpXhpzsGDcnJUAUdhN22am53PtPAvv/iiqPWnNY8P1dyaPh2H+R18Nm+ebP153BU5HTu6VfN9FP714cNK+cMUhr6tnyz9cvOmXD4CBbE3u7Ru7RblSxFLTp0yvQFEsqXsHarTA169b5/SDW/SN5B+pZzn6Gt84l+04QXUv3uPD39z/nyLb4RFNAA1n6NHKcHULh+hNe7++KOsYAxNpCFPt+6fdgCRZSsDtjEslb7eulVpQ02YjmNU8JxJXl3uDG1oaHFvQ5txVWr897/LCmxEc/Tz9FTaHSZ0o0Rm+XbijzAJm5+2s3QnJvGfw2IqVUJz3MHMhg3NShhz7qx7AwWjDx1S2j4TquEbTKhaVdbQXUD53adOFfs+USqdIfw56d0W9ChtWJ03zNX/dOCAKVeyMKZgHQKaNBHtLkmZ+W/pLnh5QQ0fhJF5cMiYbOlMvrSZMjOVNlCA49ERTZ9hYAnDLaq9OmJJdjaOoTKSU1LM9JiMDzAyI0NpfwiY2qke34PLr7+aCRjbWfo2f3h+nqenZDpJIwMahrqY99NPShtmhhzaiRq3bsldlraSLvdk69YldTsRLTR1hO/wTwTcuMEOPAbXhgxR2h2FQTMomDbLtxuNkbrAtWlTK3GECmA/xD3D8C40g4cmJeF7LFPaqP8woCVvR4uEBL6GdCQ1aGCm9x6qhHbjx6M8AMTGFvd+/xkmNgaNtACAsUr74lngCKSi3vnzT/54hsBVw2dUu359SZydk63pB1STQpKTlTaoMKgWNzHUe07cO4v3UnS3bqbl3P8aEvQH9bUvXpS9bkVfcba7u4TZuIEANzc5OZ3OkFPgf+OG0vYUhutZX9pU89AhuNEqhMXHywoa1/FpefHOQd9GRaVviL8/+IKfX+rXsTxi178dDv0vg95OlaP68M8/5a6TFu9RObXaCvZcG1nGPWIrc8GKx2yqWYWWnbNsZvDCEP3V4GC0xzyV7vhx2fx74xuBe+I3ju7WjUDIA5DuGG+r2f3wIf+DL3DDGzcoAA8oVasVbxhTR3vNYNhjcJKWZWer3iE8a6bMt6kd0u3tJTyCHv3knwSHdx3aZR1TfstXDqbEk8V0jPr26IFQzIOu6Gft+DJH40dbWzTGFVresCFfQzq2BweLHcY0ju+l4bi4srL3X1Q8LP/4Uvme2dmyAvbcDPfs7V86KbSsQa33fhjWWavlFnwQzdu2xVWkoWfxJ39I508x2Nsb7Xmxas7x42mqeNvBP5ahjZ9iQkJFqLBd/gnPOp51zKHd6zNWijN16rY+fwvv5ucn9uoB7OJeGzbgMC7g1vnzcEQFbHmBN5sYWkK4He/47ruykh8gB9u8CvXz9j7nCF42nYFLdrYVsukaHLKzAQYemY+dj9rlpujGOzgAICh4jPll8W9BmjV4RrDmTsyBZgOibG2tVpX7xXpQmzam5aNxzmBWobEj0FXagwYbNjz50c9PaTsLQ+olZRom2NsDDDwjaZze4GNwy86WEMy/4B354I6VlWRnHVP2kiVLClX8O53ZkvrwoVuUj3XEkthYdXnv+xF/7d4dHegXzJ0xQ7ZgHaix19c3PSW2oqZPhw5K21EYqhy9nf6bGjXkrrMnjnJ+WpqE2jjDrs/J3p1tyOEa5hst/+0oajSQy9Mn/Env3krrWxg0RvWHdPMZsR0BHQ8k++RkSZAfyVZkJEZQ2qDCEAc80k7E19BkpKSk/SPuvMbzxo3UnLhrQS26dCmp+1iMBiZhKqp5eSntDzO8jWmU9JwOUEeay9cuXZJ4F0Arzp6VkzMxYpQ1lNYBD0vRwHrYQmFlJxoowPN4Iw+Sbzf+0rAfGWfPSgancr9ZNUxIQBriMJjNd42NVCj3OZYHsZOT0oYJ0ABqhdHPSHc2HvAoqZ0+Gmb9bl4uyR+hU6MD1pLiXEsCpna6TC649/bbZgLGdhY0d5KJ5+4ATiHfGDz4dxg5cApSKc5KU4by5PN4Meq/+mgg38w9VWFkq1ayAo8wGy7yepQ2dENVra3t/P1luYsWYhiiz50T7W7aCDLx3MnAxIFTVhCM37Fdq5W7bFrOFRfTMYOj5euhARxNJK9HqSPEMJff/vhj2etzuTL7xsSIP5/uBBoJDmULGsmPRPKh0naiGS2koG3bZK8XMxqY1jeWNVVmzOAk/huSAgLkJUln6P8cPUoJpsyunTiJyp07ywpW5Fhpx44dJu3NDL8Y31yz7MIFuPCKZ8XZkUYJHPT55+rG3jMjPGbPVtpwcXJHHOCQFTQu58Ss3uBocCr3+88/i8vSAykzv3mbNuKJt9Tw1ByrUDkhwe22z57wBd7eivvBPW6mpt3s2ZwIPzSeOdNMIAl1eeyFC2pvn+oRzZ6u6sxiAbQJt+D1nHx3I+uV3EmT0gZXJBfDLY0Gv1IP/PocmjhTNJB/4yWHD5MfxefFZGeLf8XvFp94430My3k3XDUape03MasOR0U+OGqUnBwFcjWaYX420rwDGClNBbOlWU3GrVDBeqW0A0Q0kFfqL2J9QIDFjvCyEA3fkupJf33Ce1AaPH6WYOj66LLNivHjn54AKgRxYqiJdTq7my+PzTqAOGkiKE3lbizozu4O02oD/6hTR2lHVIryqxzeOjGRP9RXVbVq2ZI64w6vKv7kTLzqRb2VXb1ObZxx9KjS9qbaH2kyZEjduvQBHcPnkyfL6r8Wj+j9lStNya2FIBsOFly2gtK08HXBc6c6oV8j1Vq5UrBeKe2YStl+5zZsuHLF7bTPRxEVvLxENJCC2Jv2WT4eLuRoL71Fkzp0EGO8qFdp+4Sfpf6q6/r0Vas4AvlIsbExs8PI1KK6yLN1R+V3Mi02WNqPcZuDLgYHoyVq0mIR/XoG6tBw2jtmjGC9UtpRsvakxcVpNMxy19VqH5/wcOU7sqz+G+OWa74dN+7Jhpf8wRc+wt7sHxhYqY8vRfSOjJSTs5gQ4ubvPbC6e3i44LKVFTTy3KXviW8VPLrk0rH/jycQZzdxFt/DduFCOTlagxU86OhRdW8fRPTevNlSvRY7gKAm5a2G1qq+/fvLTrIEweFm7mOoGR39omRFpQaZAx4iz19p9QpDzLHYyhCCFt9/L0skaWwX/W3VOK45YIAgkrBUf5FTwkxj4B6qRxeHDpWTE8wU1Fs/x/BBdLSgO1PakSb9XpMDHsJvqv36atK0mJgnuYryfuS3eC9aBAdXXufpuanm1atFvc9Lj3XpjeNuaRqEhnI8ktF+3DjZGwiiyC6qFMMCf/8XVfB/DWJ2LzVSGXRzYmI4mtfS9Lp1ZQv8RpFwWrpU3dE7MnzZpEkver+XTgp1Pef9RrULEycKEmM5OUFwqNqqd5YuJyb+f47wbGR8cuRc4JG2bSW16p7+bmKixYY/wd6Yu22bWwevTeHLnsMaZgEv3QHE3MDEXm2Btcr0CtuHM4ZdWm2afXyjwS6jR5eV5WNpQ9id9mksB3UeO9bgKH0qFSQk8AneAbfKleXKCT+7dbU/pZoVGFjUsV62vhIzSNDFG0mMBZetRQWMBukW0ho6/+mnZYV06lXB9IoX6/g5HA3n5wRvBMQTLxpeatV6w8aCguLq8+o+GGEkMeab6I6FlsOygnaOw8nA1xYtosmq4fguNFRuB+t1gdirF1u29B7Nx+2QkKJ+MEKM8eJVX9wnvjBe/SdjGsbPCPLo3Rs7+RhFbNxYZBYvsYdtJD/SRVjZGRasXl1WKGrkIMKyVqMKvi34fORIU5BGbq++MIzLOTGrr1TZxzc8YvfuV6VvqY29pr1rP2mqvsGWLYLStMgViI9GCQ4cIxWKYMQobQILwcBZEMLjCr7q1Akr+YphS//+WMLjaJu//4t+NEps4Ih1fGmtlpT7bFyPhMwbHQIDycBhFPDFF2L/4IUrFFQoRkYMQYxgOh9vPCZtOGh9HP1v3LAZaPWRtCczs/CZR3ECKvcr3U5DLycnaa2uvVSjRg2kS74U7O5OQaiEy40amZItRc7dy342zrhXb9gFjTRsyhR1de8+YfsjI0v6FW9Rj9K6kRzEkyQoTQWzZZFfma8LjEOaiM6JII3S1DuKd4DCeJpo8oTZkpfSFqqi0chmKJVVGDNwTIkYxnh8WZvUlrkOIIf07rEcNKlVK8Fzx+MoHo38/TGIu0HbuLEsydWrgkijN2bZmpItjTl3rwtt/mvTAeQgklRVP+uaUzMvL0F+BD1fpwXu7rgJbw6tX59WYyclurqyH7y5t7MzriOGEm1tTRXVgj97PHxIRxBPu+7f55H4iD0yMlAV8TT+0iWoqBZPS06WRsGOap85k99P+sywSast66sSS/gXc5sEA332f/4AAAAldEVYdGRhdGU6Y3JlYXRlADIwMjItMDQtMTRUMTU6MDY6MTQrMDA6MDAt6CP7AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIyLTA0LTE0VDE1OjA2OjE0KzAwOjAwXLWbRwAAAABJRU5ErkJggg=="/>
                                    </defs>
                                </svg>
                            </div>
                            <div class="legend-widget">
                                <h3>Économie financière</h3>
                            </div>
                        </div>
                        <div class="animaux">
                            <div class="widget-perso">
                                <p><?=$statistiques['animaux']?></p>
                                <svg width="73" height="74" viewBox="0 0 73 74" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="73" height="74" fill="url(#pattern0)"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_887_5224" transform="translate(-0.00684932) scale(0.015839)"/>
                                    </pattern>
                                    <image id="image0_887_5224" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg> 
                            </div>
                            <div class="legend-widget">
                                <h3>Animaux</h3>
                            </div>
                        </div>
                    </article>

                    <article class="conseils_objectifs">
                        <div class="conseil">
                            <div class="titre">
                                <h3>Conseil du jour</h3>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="48" height="48" fill="url(#pattern0)"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_887_5229" transform="scale(0.015625)"/>
                                    </pattern>
                                    <image id="image0_887_5229" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>
                            </div>
                            <div class="contenu">
                                <p>Remplacer votre steak (100g) par des lentilles, haricots rouges ou pois chiches cuits (entre 250g et 350g).

                                    250g à 350g de lentilles, de haricots rouges ou de pois chiches cuits, proccurent 26g de protéïne, soit l’équivalence d’un steak de 100g. </p>
                            </div>
                        </div>
                        <div class="objectif">
                            <div class="titre">
                                <h3>Prochain objectif</h3>
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="38" height="38" fill="url(#pattern0)"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_887_5234" transform="scale(0.015625)"/>
                                    </pattern>
                                    <image id="image0_887_5234" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>                            
                            </div>
                            <div class="contenu">
                                <p>
                                    Vous avez réussi à réduire votre consommation de viande durant 5 jours complets ?
                                    Félicitation ! Votre prochain objectif sera de tenir le même rythme encore 5 jours avant de passer à l’étape suivante ;)
                                </p>
                            </div>
                        </div>
                    </article>
                        
                </section>
            </main>
            <?php
        }

        function modificationInformation(){
            ?>

<main class="ajoutRecette modifierInfos">
        <section>
            <article>
                <div class="nouvelle-recette">
                    <h1>Modifier mes informations</h1>
                    <div class="formulaire-creation-recette form-user">
                        <form action="<?= PATHBASE ?>/espace-utilisateur/modifier-informations-traitements" method="post">
                            <div class="selection-image">
                                <label for="image-recette" class="label-image-recette">
                                    <div class="recette-svg">
                                        <svg width="75" height="75" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.9998 15.1998C13.7671 15.1998 15.1998 13.7671 15.1998 11.9998C15.1998 10.2325 13.7671 8.7998 11.9998 8.7998C10.2325 8.7998 8.7998 10.2325 8.7998 11.9998C8.7998 13.7671 10.2325 15.1998 11.9998 15.1998Z"
                                                fill="#E3B759" />
                                            <path
                                                d="M9 2L7.17 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4H16.83L15 2H9ZM12 17C9.24 17 7 14.76 7 12C7 9.24 9.24 7 12 7C14.76 7 17 9.24 17 12C17 14.76 14.76 17 12 17Z"
                                                fill="#E3B759" />
                                        </svg>
                                    </div>
                                </label>
                                <input type="file" name="img-recette" id="image-recette" class="image-recette"
                                    accept="image/*">
                            </div>
                            <div class="description-recette desc-user">
                                <div class="titre-temps">
                                    <div>
                                        <label for="pseudo">Pseudo</label>
                                        <input type="text" name="pseudo" placeholder="Votre pseudo">
                                    </div>
                                    <div>
                                        <label for="nom">Nom</label>
                                        <input type="text" name="nom" placeholder="Votre nom">
                                    </div>
                                    <div>
                                        <label for="prenom">Prénom</label>
                                        <input type="text" name="prenom" placeholder="Votre prénom">
                                    </div>
                                    <div>
                                        <label for="email">Adresse-email</label>
                                        <input type="email" name="email" placeholder="Votre adresse-email">
                                    </div>
                                    <div>
                                        <label for="mdp">Mot de passe</label>
                                        <input type="text" name="mdp" placeholder="Votre mot de passe">
                                    </div>
                                </div>
                            <div class="enregistrer">
                                <input class="cta" type="submit" value="Enregistrer">
                            </div>
                            </div>
                    </div>
                    <div class="supprimer-slot">
                        <h2>Supprimer mon compte</h2>
                        <div class="supprimerBtn">
                            <a class="cta" href="<?= PATHBASE ?>/espace-utilisateur/suppression-compte">Supprimer mon compte</a>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </article>
        </section>

    </main>

            <?php
        }
        public function mesRecettesPostees()
    {
        ?>
        <main class="recettes afficheRecettes">
        <section>
            <div class="debut">
                <h1>Mes Recettes postées</h1>
                <h3>Ajouter une recette</h3>
                <div class="recherche">
                    <input type="search" id="recette-search" name="recette" placeholder="Rechercher..">
                </div>
                <div class="categ-ajout">
                    <div class="select">
                        <select>
                            <option value="">Catégorie</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <a href="">Ajouter une recette</a>
                </div>
            </div>
            <div class="toutes-recettes">
                <article class="une-recette" href="">
                    <a href="" class="une-recette-link">
                        <div class="img-afficherRecette">
                            <img src="media/recettes/r_tarte_aux_fraises.jpg">
                        </div>
                        <div class="overlay">
                            <h4>Tarte aux fraises</h4>
                        </div>
                        <div class="svg-coeur">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="48px" height="48px"
                                viewBox="0 0 480 480" preserveAspectRatio="xMidYMid meet">
                                <g id="layer101" fill="#ff3d00" stroke="none">
                                    <path
                                        d="M185 357 c-122 -103 -135 -120 -135 -171 0 -39 5 -53 29 -77 24 -23 38 -29 73 -29 24 0 54 7 66 16 20 14 24 14 44 0 12 -9 42 -16 66 -16 35 0 49 6 73 29 24 24 29 38 29 77 0 42 -4 51 -43 88 -46 44 -144 126 -149 125 -2 0 -25 -19 -53 -42z" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </article>
                <article class="une-recette" href="">
                    <a href="" class="une-recette-link">
                        <div class="img-recette">
                            <img src="../media/recettes/r_tarte_aux_fraises.jpg">
                        </div>
                        <div class="overlay">
                            <h4>Tarte aux fraises</h4>
                        </div>
                        <div class="svg-coeur">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="48px" height="48px"
                                viewBox="0 0 480 480" preserveAspectRatio="xMidYMid meet">
                                <g id="layer101" fill="#ff3d00" stroke="none">
                                    <path
                                        d="M185 357 c-122 -103 -135 -120 -135 -171 0 -39 5 -53 29 -77 24 -23 38 -29 73 -29 24 0 54 7 66 16 20 14 24 14 44 0 12 -9 42 -16 66 -16 35 0 49 6 73 29 24 24 29 38 29 77 0 42 -4 51 -43 88 -46 44 -144 126 -149 125 -2 0 -25 -19 -53 -42z" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </article>
            </div>
        </section>
    </main>
<?php
    }

    public function mesRecettesCoeur()
    {
        ?>
        <main class="recettes afficheRecettes">
        <section>
            <div class="debut">
                <h1>Mes Recettes favorites</h1>
                <h3>Ajouter une recette</h3>
                <div class="recherche">
                    <input type="search" id="recette-search" name="recette" placeholder="Rechercher..">
                </div>
                <div class="categ-ajout">
                    <div class="select">
                        <select>
                            <option value="">Catégorie</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <a href="">Ajouter une recette</a>
                </div>
            </div>
            <div class="toutes-recettes">
                <article class="une-recette" href="">
                    <a href="" class="une-recette-link">
                        <div class="img-afficherRecette">
                            <img src="../media/recettes/r_tarte_aux_fraises.jpg">
                        </div>
                        <div class="overlay">
                            <h4>Tarte aux fraises</h4>
                        </div>
                        <div class="svg-coeur">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="48px" height="48px"
                                viewBox="0 0 480 480" preserveAspectRatio="xMidYMid meet">
                                <g id="layer101" fill="#ff3d00" stroke="none">
                                    <path
                                        d="M185 357 c-122 -103 -135 -120 -135 -171 0 -39 5 -53 29 -77 24 -23 38 -29 73 -29 24 0 54 7 66 16 20 14 24 14 44 0 12 -9 42 -16 66 -16 35 0 49 6 73 29 24 24 29 38 29 77 0 42 -4 51 -43 88 -46 44 -144 126 -149 125 -2 0 -25 -19 -53 -42z" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </article>
                <article class="une-recette" href="">
                    <a href="" class="une-recette-link">
                        <div class="img-recette">
                            <img src="media/recettes/r_tarte_aux_fraises.jpg">
                        </div>
                        <div class="overlay">
                            <h4>Tarte aux fraises</h4>
                        </div>
                        <div class="svg-coeur">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="48px" height="48px"
                                viewBox="0 0 480 480" preserveAspectRatio="xMidYMid meet">
                                <g id="layer101" fill="#ff3d00" stroke="none">
                                    <path
                                        d="M185 357 c-122 -103 -135 -120 -135 -171 0 -39 5 -53 29 -77 24 -23 38 -29 73 -29 24 0 54 7 66 16 20 14 24 14 44 0 12 -9 42 -16 66 -16 35 0 49 6 73 29 24 24 29 38 29 77 0 42 -4 51 -43 88 -46 44 -144 126 -149 125 -2 0 -25 -19 -53 -42z" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </article>
            </div>
        </section>
    </main>
<?php
    }

    }

?>