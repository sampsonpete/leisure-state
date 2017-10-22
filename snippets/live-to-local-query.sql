UPDATE wp_y4g7ynj2c5_options SET option_value = replace(option_value, 'http://leisure-state.com', 'http://localhost:8888/leisure-state/wordpress') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE wp_y4g7ynj2c5_posts SET post_content = replace(post_content, 'http://leisure-state.com', 'http://localhost:8888/leisure-state/wordpress');
UPDATE wp_y4g7ynj2c5_postmeta SET meta_value = replace(meta_value,'http://leisure-state.com','http://localhost:8888/leisure-state/wordpress');
UPDATE wp_y4g7ynj2c5_posts SET guid = REPLACE (guid, 'http://leisure-state.com', 'http://localhost:8888/leisure-state/wordpress');
