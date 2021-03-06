import React, { useState, useEffect } from 'react';
import { Upload, Icon, message } from 'antd';
import { NAME_SERVER } from 'src/store/register/actions';

const UploadAvatar = ({ profileUser, setProfileUser, role, profileArtisan, setProfileArtisan }) => {
	const [ loading, setLoading ] = useState(false);

	const getBase64 = (img, callback) => {
		const reader = new FileReader();
		reader.addEventListener('load', () => callback(reader.result));
		reader.readAsDataURL(img);
	};

	const beforeUpload = (file) => {
		const isJpgOrPng = file.type === 'image/jpeg' || file.type === 'image/png';
		if (!isJpgOrPng) {
			message.error('You can only upload JPG/PNG file!');
		}
		const isLt2M = file.size / 1024 / 1024 < 2;
		if (!isLt2M) {
			message.error('Image must smaller than 2MB!');
		}
		return isJpgOrPng && isLt2M;
	};

	const handleChange = (info) => {
		if (info.file.status === 'uploading') {
			setLoading({ loading: true });
			return;
		}
		if (info.file.status === 'done') {
			// Get this url from response in real world.
			getBase64(info.file.originFileObj, (imageUrl) => {
				if (role === 'user') {
					setProfileUser({
						...profileUser,
						...{ pictureAvatar: imageUrl }
					});
				}

				if (role === 'artisan') {
					setProfileArtisan({
						...profileArtisan,
						...{ pictureAvatar: imageUrl }
					});
				}

				return setLoading({
					imageUrl,
					loading: false
				});
			});
		}
	};
	const uploadButton = (
		<div>
			<Icon type={loading ? 'loading' : 'plus'} />
			<div className="ant-upload-text">Upload</div>
		</div>
	);

	const { imageUrl } = loading;
	//console.log('imageUrl ' + imageUrl);

	let profile = '';
	if (role === 'user') {
		profile = profileUser.pictureAvatar;
	}

	if (role === 'artisan') {
		profile = profileArtisan.pictureAvatar;
	}

	return (
		<div>
			<Upload
				name="avatar"
				listType="picture-card"
				className="avatar-uploader"
				showUploadList={false}
				action="https://www.mocky.io/v2/5cc8019d300000980a055e76"
				beforeUpload={beforeUpload}
				onChange={handleChange}
			>
				{imageUrl ? (
					<img src={imageUrl} alt="avatar" style={{ width: '100%' }} />
				) : profile != '' ? (
					<img src={`${NAME_SERVER}/${profile}`} alt="avatar" style={{ width: '100%' }} />
				) : (
					uploadButton
				)}
			</Upload>
		</div>
	);
};

export default UploadAvatar;
