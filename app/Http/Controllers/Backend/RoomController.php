<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Backend\Room;
use App\Models\Office;
use App\Models\Backend\OfficeImage;


class RoomController extends Controller
{
    public function index($id)
    {
        $roomObj = new Room();

        $officeImgObj =  new OfficeImage();
        $officeImg = $officeImgObj->getImageList($id);
        $rooms = $roomObj->getListRooms($id);

        return view('backend.office.room.index', compact('rooms', 'officeImg'));
    }

    public function show($room_id)
    {

        return view('backend.office.room.show');
    }

    public function edit($room_id)
    {
        return view('backend.office.room.edit');
    }

    public function store(Request $request, $id)
    {
        $room = new Room();

        $room->office_id = $id;

        $room->rooms = $request->rooms;
        $room->created_at = date('Y-m-d');
        $room->updated_at = date('Y-m-d');

        $room->save();

        return redirect('/manager/office/' . $id . '/rooms');
    }

}
