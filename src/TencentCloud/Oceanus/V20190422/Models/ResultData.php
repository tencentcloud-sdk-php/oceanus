<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sql Gateway返回数据
 *
 * @method string getKind() 获取操作类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(string $Kind) 设置操作类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFields() 获取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFields(array $Fields) 设置结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResultData extends AbstractModel
{
    /**
     * @var string 操作类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @var array 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fields;

    /**
     * @param string $Kind 操作类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Fields 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }
    }
}
