
                <select class="form-control" name="pDistrict">
                    <option>----Select District---</option>
                    @foreach($districts as $district)
                    <option value="{{$district->dId}}">{{$district->districtName}}</option>
                    @endforeach
                </select>
          