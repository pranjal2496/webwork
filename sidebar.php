<style>
    

    #sidebar.hidden {
        transform: translateX(-100%);
        margin-left: -240px;
    }

    body.sidebar-visible {
       
        transition: margin-left 0.3s ease;
       
    }

    #sidebarToggleBtn {
        position: fixed;
        top: 39px;
        left: 20px; 
        z-index: 100; 
        background-color: white;
    }

    #sidebarMenu li {
        margin: 10px 20px; 
    }

    
    .nav-link h5 {
        font-size: 18px;
    }
</style>

<div id="sidebar" class="col-md-2 ">
    <div class="text-center" style="display: flex;">
        <div style="width: 100%; height: 100%;"> 
            <ul class="nav flex-column mr-auto" id="sidebarMenu" style="margin-top: 25%;">
                <li class="nav-item">
                    <a class="nav-link text-center" style="color: white;" href="queenzend.php">
                        <h5>Home</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" style="color: white;" href="coderlab_1.php">
                        <h5>Coderlab</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" style="color: white;" href="ring_1.php">
                        <h5>Ring</h5>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<button id="sidebarToggleBtn" class="btn btn-info"><i class="bi bi-list"></i></button>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let sidebar = document.getElementById('sidebar');
        let body = document.body;
        let toggleButton = document.getElementById('sidebarToggleBtn');

        body.classList.add('sidebar-visible');

        toggleButton.addEventListener('click', function() {
            sidebar.classList.toggle('hidden');
            body.classList.toggle('sidebar-visible');
        });

        let links = document.querySelectorAll("#sidebarMenu .nav-link");
        let currentUrl = window.location.href;

        links.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add("active");
            }
        });
    });
</script>

