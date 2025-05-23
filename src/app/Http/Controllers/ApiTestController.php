<?php

namespace App\Http\Controllers;

use App\Models\TestTable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Exception;

class TestTableController extends Controller
{
    /**
     * レコードを1件取得
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            // 最初のレコードを1件取得
            $record = TestTable::first();

            if (!$record) {
                return response()->json([
                    'success' => false,
                    'message' => 'テーブルにレコードが存在しません。',
                    'data' => null
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $record,
                'message' => 'レコードを正常に取得しました。'
            ], 200);

        } catch (Exception $e) {
            Log::error('レコード取得エラー', [
                'exception' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'レコードの取得中にエラーが発生しました。',
                'error' => 'Internal server error'
            ], 500);
        }
    }

}
