<?= $this->extend('Layout/template'); ?>

<?= $this->Section('content'); ?>

<div class="container">
    <div class="left-container">
        <button class="image-button-1 mt-3" onclick="document.getElementById('modal1').style.display='block'">JUANTIKA</button>
        <div id="modal1" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal1').style.display='none'">&times;</span>
                <h2>PRAMUKA</h2>
            </div>
        </div>
        <button class="image-button-2 mt-3" onclick="document.getElementById('modal2').style.display='block'">PASKIBRA</button>
        <div id="modal2" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal2').style.display='none'">&times;</span>
                <h2>PASKIBRA</h2>
            </div>
        </div>
        <button class="image-button-5 mt-3" onclick="document.getElementById('modal5').style.display='block'">LISSKA</button>
        <div id="modal5" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal5').style.display='none'">&times;</span>
                <h2>LISSKA</h2>
            </div>
        </div>
        <button class="image-button-6 mt-3" onclick="document.getElementById('modal6').style.display='block'">IPMI</button>
        <div id="modal6" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal6').style.display='none'">&times;</span>
                <h2>IPMI</h2>
            </div>
        </div>


    </div>
    <div class=" right-container">
        <button class="image-button-3 mt-3" onclick="document.getElementById('modal3').style.display='block'">PAKUBARA</button>
        <div id="modal3" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal3').style.display='none'">&times;</span>
                <h2>PAKUBARA</h2>
            </div>
        </div>
        <button class="image-button-4 mt-3" onclick="document.getElementById('modal4').style.display='block'">PMR</button>
        <div id="modal4" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal4').style.display='none'">&times;</span>
                <h2>PMR</h2>
            </div>
        </div>
        <button class="image-button-7 mt-3" onclick="document.getElementById('modal7').style.display='block'">PERISAI DIRI</button>
        <div id="modal7" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal7').style.display='none'">&times;</span>
                <h2>PERISAI DIRI</h2>
            </div>
        </div>
        <button class="image-button-8 mt-3" onclick="document.getElementById('modal8').style.display='block'">ENGLISH CLUB</button>
        <div id="modal8" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal8').style.display='none'">&times;</span>
                <h2>ENGLISH CLUB</h2>
            </div>
        </div>
        <button class="image-button-9 mt-3" onclick="document.getElementById('modal9').style.display='block'">JAPANESSE CLUB</button>
        <div id="modal9" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal9').style.display='none'">&times;</span>
                <h2>JAPANESSE CLUB</h2>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
<button class="image-button-1" </button>