<?php

use Illuminate\Database\Seeder;

class EspecialtyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSpecialties();
    }

    private function createSpecialties()
    {
        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGON.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'DIM.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'DAEN.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'DEMN.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGEN.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGIM.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONAD.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONEL.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONMQ.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONCO.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => ''
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'DESN.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONMC.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONSA.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONMS.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONIM.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONIN.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONAV.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONTP.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONHD.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'DEM.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'AEMN.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'AE.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'AGRON.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'ALM.AV.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'ART.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'AV.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'CAB.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'COM.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'COMPUT.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'CPN.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'DEMA.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'DESA.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'IM.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'INF.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'ING.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'INTEND.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'MANT.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'MB.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'MEC.ARM.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'MEC.AV.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'MOT.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'MUS.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'MUS.NO EGR.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'NAVEG.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'PROG.SIS.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'PS.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'R.OPR.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'SAN.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'STA.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'TEC.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'TEC.AV.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'TEC.IM.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'TOP.'
        ]);

        factory(\App\Entities\Especialty::class)->create([
            'especialty'  => 'VIT.'
        ]);
    }
}
