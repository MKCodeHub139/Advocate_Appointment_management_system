<div class="flex flex-col gap-5">
    <div class="header">
        <h2 class="text-2xl font-[500]">
            Create Service
        </h2>
    </div>
    <form action="" class="py-5 serviceForm flex flex-col gap-3" enctype="multipart/form-data">
        @if($service->id)
            <input type="hidden" name="id" id="" value="{{$service->id}}">
        @endif
        <div class="title flex flex-col gap-1">
            <label for="" class="text-[14px] font-[500]">Title</label>
            <input type="text" name="title" id="" class="bg-gray-200 rounded-xl py-1 px-3" placeholder="Enter Service Title" value="{{$service->title}}">
        </div>
        <div class="description flex flex-col gap-1">
            <label for="" class="text-[14px] font-[500]">Description</label>
            <textarea name="description" id="" cols="100" rows="4" placeholder="Enter Service Description" class="bg-gray-200 rounded-xl py-1 px-3">{{$service->description}}</textarea>
        </div>
        <div class="services flex flex-col gap-1">
            <label for="" class="text-[14px] font-[500]">Services</label>
            <input type="text" name="services" id="" class="bg-gray-200 rounded-xl py-1 px-3" placeholder="civil law,criminial law,etc..." value="{{$service->service}}">
        </div>
        <div class="svg image flex flex-col gap-1">
            @if($service->imageUrl)
            <div class="img">
                <img src="{{asset($service->imageUrl)}}" alt="">

            </div>
            @endif
            <label for="" class="text-[14px] font-[500]">Svg image</label>
            <input type="file" name="image" id="" class="bg-gray-200 rounded-xl py-1 px-3 w-[50%]">
        </div>
        <div class="submit-btn float-end mt-5">
            <button class="px-5 py-1 bg-blue-500 hover:bg-blue-600 rounded-xl text-white font-[400] cursor-pointer create-or-update-service  float-end">{{$service->id?'Update Service':'Create Service'}}</button>
        </div>
    </form>
</div>