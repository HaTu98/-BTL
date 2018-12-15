<div class="frame">
    <form action="{{ URL('student/survey') }}" method="post" id="insert-survey" >
        @csrf
    <div class="survey-table p-5">
        <h2 class="text-center" id="name-courses">Name Course</h2>
            <input type="hidden" name="user_course_id" id="input-id" value="">
            <table class="table">
                <thead>
                    <tr>
                        <th>1. Cơ sở vật chất</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                @if($data['id'] <= 2)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="1" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="2" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="3" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="4" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="5" > </td>
                    </tr>
                @endif
                @endforeach
                </tbody>
                <tr>
                    <th>2. Môn học</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                @if($data['id'] <= 7 && $data['id'] > 2)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="1" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="2" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="3" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="4" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="5" > </td>
                    </tr>
                @endif
                @endforeach
                </tbody>
                <thead>
                    <tr>
                        <th>3. Hoạt động giảng dạy của giáo viên</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                @if($data['id'] <= 15 && $data['id'] > 7)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="1" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="2" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="3" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="4" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="5" > </td>
                    </tr>
                @endif
                @endforeach
                </tbody>
                <thead>
                    <tr>
                        <th>4. Hoạt động học tập cảu học sinh</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                @if($data['id'] > 15)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="1" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="2" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="3" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="4" > </td>
                        <td><input type="radio" name="{{ 'survey'.$data['id'] }}" value="5" > </td>
                    </tr>
                @endif
                @endforeach
                </tbody>
                <thead>
                        <tr>
                        <th>5.Ý kiến bổ xung của sinh viên</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <form>
                                <td><input type="" class="form-control" id="input-note"></td>
                            </form>
                        </tr>
                    </tbody>
            </table>
    </div>
    <div class="p-5 text-center">
        <button type="submit" class="btn btn-lg btn-success center-block">Nộp đánh giá</button>
    </div>
    </form>
</div>

