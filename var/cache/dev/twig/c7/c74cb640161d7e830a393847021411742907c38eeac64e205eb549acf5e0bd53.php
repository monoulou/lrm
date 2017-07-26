<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e5e905a08de63d190931a289f4e94f996e70e0bbddea65d49a7866cecbbd0d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_571b6fbf226d31de0d9c0993031d543361747a361f83b524a27fdcdad38aeb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571b6fbf226d31de0d9c0993031d543361747a361f83b524a27fdcdad38aeb1e->enter($__internal_571b6fbf226d31de0d9c0993031d543361747a361f83b524a27fdcdad38aeb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_088da5f208e9ad9543d0a2c6d7c51a35232efe595dc0a41cae8bb32cafdb980d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088da5f208e9ad9543d0a2c6d7c51a35232efe595dc0a41cae8bb32cafdb980d->enter($__internal_088da5f208e9ad9543d0a2c6d7c51a35232efe595dc0a41cae8bb32cafdb980d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571b6fbf226d31de0d9c0993031d543361747a361f83b524a27fdcdad38aeb1e->leave($__internal_571b6fbf226d31de0d9c0993031d543361747a361f83b524a27fdcdad38aeb1e_prof);

        
        $__internal_088da5f208e9ad9543d0a2c6d7c51a35232efe595dc0a41cae8bb32cafdb980d->leave($__internal_088da5f208e9ad9543d0a2c6d7c51a35232efe595dc0a41cae8bb32cafdb980d_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5175fc183620b19d0a46bdb7a69e9603a7931abad0576923881f16db69b62288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5175fc183620b19d0a46bdb7a69e9603a7931abad0576923881f16db69b62288->enter($__internal_5175fc183620b19d0a46bdb7a69e9603a7931abad0576923881f16db69b62288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a884468452e738e43a4ae60a0fe83ab6c94b93e7f19a7ddaf96ab4cd8a9b2872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a884468452e738e43a4ae60a0fe83ab6c94b93e7f19a7ddaf96ab4cd8a9b2872->enter($__internal_a884468452e738e43a4ae60a0fe83ab6c94b93e7f19a7ddaf96ab4cd8a9b2872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a884468452e738e43a4ae60a0fe83ab6c94b93e7f19a7ddaf96ab4cd8a9b2872->leave($__internal_a884468452e738e43a4ae60a0fe83ab6c94b93e7f19a7ddaf96ab4cd8a9b2872_prof);

        
        $__internal_5175fc183620b19d0a46bdb7a69e9603a7931abad0576923881f16db69b62288->leave($__internal_5175fc183620b19d0a46bdb7a69e9603a7931abad0576923881f16db69b62288_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
