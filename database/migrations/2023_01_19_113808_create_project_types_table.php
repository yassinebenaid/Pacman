<?php

use App\Models\ProjectType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_types', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
        });

        $types = [
            "web application", "mobile application", "desktop application",
            "UI/UX design", "AI / Machine Learning"
        ];

        foreach ($types as $type) {
            ProjectType::create(["name" => $type]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_types');
    }
};
