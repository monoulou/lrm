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
        $__internal_bf36c579e2bbfdc25a91a4b88bddb1c5178ddd6b41ebbef1780672db9f2fbdfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf36c579e2bbfdc25a91a4b88bddb1c5178ddd6b41ebbef1780672db9f2fbdfc->enter($__internal_bf36c579e2bbfdc25a91a4b88bddb1c5178ddd6b41ebbef1780672db9f2fbdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8efe35cf98a65b435fd2be4717850fee9e6b421c082cf3e05d2edd1c7ddf3f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efe35cf98a65b435fd2be4717850fee9e6b421c082cf3e05d2edd1c7ddf3f50->enter($__internal_8efe35cf98a65b435fd2be4717850fee9e6b421c082cf3e05d2edd1c7ddf3f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf36c579e2bbfdc25a91a4b88bddb1c5178ddd6b41ebbef1780672db9f2fbdfc->leave($__internal_bf36c579e2bbfdc25a91a4b88bddb1c5178ddd6b41ebbef1780672db9f2fbdfc_prof);

        
        $__internal_8efe35cf98a65b435fd2be4717850fee9e6b421c082cf3e05d2edd1c7ddf3f50->leave($__internal_8efe35cf98a65b435fd2be4717850fee9e6b421c082cf3e05d2edd1c7ddf3f50_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca8eb3c6c12867921d9aa56852f92f9a4c10ba590bfe63ad40912baca704e332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8eb3c6c12867921d9aa56852f92f9a4c10ba590bfe63ad40912baca704e332->enter($__internal_ca8eb3c6c12867921d9aa56852f92f9a4c10ba590bfe63ad40912baca704e332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_767aca271d1ef975a4cca8aa2b215a2f7bee51bf7cf76b943a4969c481cf2240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767aca271d1ef975a4cca8aa2b215a2f7bee51bf7cf76b943a4969c481cf2240->enter($__internal_767aca271d1ef975a4cca8aa2b215a2f7bee51bf7cf76b943a4969c481cf2240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_767aca271d1ef975a4cca8aa2b215a2f7bee51bf7cf76b943a4969c481cf2240->leave($__internal_767aca271d1ef975a4cca8aa2b215a2f7bee51bf7cf76b943a4969c481cf2240_prof);

        
        $__internal_ca8eb3c6c12867921d9aa56852f92f9a4c10ba590bfe63ad40912baca704e332->leave($__internal_ca8eb3c6c12867921d9aa56852f92f9a4c10ba590bfe63ad40912baca704e332_prof);

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
