<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createGrades();
    }

    private function createGrades()
    {
        factory(App\Entities\Grade::class)->create([
            'grade'  => 'ALF.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'TF.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'TN.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'CC.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'CF.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'CN.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SG1.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SG2.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SGI.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SO1.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SO2.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SOI.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SR.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SRA.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'LIC.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'DR.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'DRA.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SOM.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SMT.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'C/5.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'C/4.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'C/3.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'C/2.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'C/1.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'A/1.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'A/2.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'A/3.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'ALMTE.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'C.ALMTE.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'CAP.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'CNL.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'GRAL.BRIG.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'GRAL.DIV.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'GRAL.FZA.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'MY.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SGTO.1RO.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SGTO.2DO.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SGTO.INL.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SOF.1RO.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SOF.2DO.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SOF.INL.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SOF.MTRE.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SOF.MY.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'STTE.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'TCNL.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'TTE.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'V.ALMTE.'
        ]);
    }
}