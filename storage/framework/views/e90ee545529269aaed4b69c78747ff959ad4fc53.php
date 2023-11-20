<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left mb-3">
                <h2>Részletes kereső</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="" id="ajax-form">
                <div class="form-group">
                    <strong>Kezdő dátum:</strong>
                    <input type="date" name="szulido-from" id="szulido-from" value="1980-01-01" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Záró dátum:</strong>
                    <input type="date" name="szulido-to" id="szulido-to" value="1999-12-20" required class="form-control">
                </div>
                <div class="form-group">
                    <strong>Klub:</strong>
                    <select name="klubid" id="klubid" class="form-control form-control-md">
                        <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($club->id); ?>">
                                <?php echo e($club->csapatnev); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Küld</button>
                </div>
            </form>
        </div>

    </div>
    <div class="row hidden" id="player-result-container">
        <div class="col-lg-12 margin-tb">
            <div class="float-left mb-3">
                <h2>Eredmény</h2>
            </div>
        </div>
        <div class="col-md-12">
            <div id="player-table"></div>
            <form action="/api/players/pdf" id="pdf-generator-form" method="POST" class="float-right">
                <input id="pdf-html" type="hidden" name="html">
                <button type="submit" class="btn btn-success">Nyomtatás PDF-ben</button>
            </form>
        </div>
    </div>

    <script>

        class Player {
            vezeteknev; utonev; mezszam;
            szulido; ertek; poszt;

            constructor(player) {
                this.mezszam = player.mezszam;
                this.utonev = player.utonev;
                this.vezeteknev = player.vezeteknev;
                this.szulido = player.szulido;
                this.ertek = player.ertek;
                this.poszt = player.nev;
            }
        }

        document.getElementById('ajax-form').addEventListener('submit', e => {
            e.preventDefault();
            const mainContainer = document.getElementById('player-result-container');
            const bdayFrom = document.getElementById('szulido-from').value;
            const bdayTo = document.getElementById('szulido-to').value;
            const clubId = document.getElementById('klubid').value;
            const pdfInput = document.getElementById('pdf-html');
            const data = { bdayFrom, bdayTo, clubId };
            const players = [];

            fetch('/api/players/interval', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
                .then(response => response.json())
                .then(data => data.map(player => players.push(new Player(player))))
                .then(() => {
                    console.log(players);
                    mainContainer.classList.remove('hidden');
                    output = document.getElementById('player-table');
                    const generated = json2Table(players);
                    output.innerHTML = generated;
                    pdfInput.value = generated.toString();
                });
        });

        function json2Table(json) {
            let cols = Object.keys(json[0]);

            let headerRow = cols
                .map(col => `<th>${col}</th>`)
                .join("");

            let rows = json
                .map(row => {
                    let tds = cols.map(col => `<td>${row[col]}</td>`).join("");
                    return `<tr>${tds}</tr>`;
                })
                .join("");

            const table = `
            <table class="table table-striped">
                <thead>
                    <tr>${headerRow}</tr>
                </thead>
                <tbody>
                    ${rows}
                <tbody>
            <table>`;

            return table;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/customers/vh-69315/web/home/resources/views/players/details.blade.php ENDPATH**/ ?>