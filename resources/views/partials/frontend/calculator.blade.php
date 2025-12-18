<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-4 gap-x-2">
    <div class="">
        <label for="Paper Type" class="text-white">Paper Type</label>
        <select name="paper_type" class="form-select" aria-label="Paper Type">
            <option hidden="" value="0" disabled="" selected="">Paper Type</option>
            @foreach ($paper_types as $paper_type)
                <option class="text-sm" value="{{ $paper_type->id }}">{{ $paper_type->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="text-white">Academic Level</label>
        <select name="academic_level_id" id="academic_level" class="form-select get-fare" aria-label="Academic Level">
            <option hidden="" value="0" disabled="" selected="">Academic Level</option>
            @foreach ($academic_levels as $academic_level)
                <option class="text-sm" value="{{ $academic_level->id }}">
                    {{ $academic_level->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="text-white">Deadline</label>
        <select id="deadline" name="deadlines" class="form-select get-fare" aria-label="Deadlines">
            <option hidden="" value="0" disabled="" selected="">Deadline</option>
            @foreach ($deadlines as $deadline)
                <option class="text-sm" value="{{ $deadline->id }}">
                    {{ $deadline->name . ' / ' . \Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('d M, Y') }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="text-white">No of Pages</label>
        <select name="Pages" id="no_of_pages" class="form-select get-fare" aria-label="No of Pages">
            <option hidden="" value="0" disabled="" selected="">No of Pages</option>
            @for ($i = 1; $i <= 200; $i++)
                <option value="{{ $i }}" class="text-sm">
                    {{ 250 * $i . ' ' . 'Words' . ' ' . '-' . ' ' . $i . ' ' . 'Pages' }}
                </option>
            @endfor
        </select>
    </div>
    <div class="flex justify-center items-end text-center">
    <a href="{{route('order')}}" class="w-full order-link">
                            Order Now
                        </a>
    </div>
    <div class="flex lg:flex-col lg:justify-end font-semibold text-lg px-3">
        <div class="text-white">Total Price :</div>
        <div class="flex text-white ">£ 
            <div class="ml-2" id="cost">0</div>
        </div>
    </div>
</div>
