<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_9d865cb9db3179548cc9350a0241d30efead5cba5fd1a73f9fd54492979f2768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_342d2633d1ab6f92aa5075ce185971038d4da1d45c81a4fb21af6637d96dfbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342d2633d1ab6f92aa5075ce185971038d4da1d45c81a4fb21af6637d96dfbd2->enter($__internal_342d2633d1ab6f92aa5075ce185971038d4da1d45c81a4fb21af6637d96dfbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_307334f74e15ee7ce8d17af37becdf41962cf86b03049e9fd24f78ca41ea6100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307334f74e15ee7ce8d17af37becdf41962cf86b03049e9fd24f78ca41ea6100->enter($__internal_307334f74e15ee7ce8d17af37becdf41962cf86b03049e9fd24f78ca41ea6100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_342d2633d1ab6f92aa5075ce185971038d4da1d45c81a4fb21af6637d96dfbd2->leave($__internal_342d2633d1ab6f92aa5075ce185971038d4da1d45c81a4fb21af6637d96dfbd2_prof);

        
        $__internal_307334f74e15ee7ce8d17af37becdf41962cf86b03049e9fd24f78ca41ea6100->leave($__internal_307334f74e15ee7ce8d17af37becdf41962cf86b03049e9fd24f78ca41ea6100_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4b9a65b17045694b7ed1837e2b2e9ed9d4255dbad45725e1f66d0737c22b6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b9a65b17045694b7ed1837e2b2e9ed9d4255dbad45725e1f66d0737c22b6bf->enter($__internal_f4b9a65b17045694b7ed1837e2b2e9ed9d4255dbad45725e1f66d0737c22b6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0feaf5b621986252f6113c036c74943df83f45f24af3e5bb76ade44e5175eecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0feaf5b621986252f6113c036c74943df83f45f24af3e5bb76ade44e5175eecc->enter($__internal_0feaf5b621986252f6113c036c74943df83f45f24af3e5bb76ade44e5175eecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_0feaf5b621986252f6113c036c74943df83f45f24af3e5bb76ade44e5175eecc->leave($__internal_0feaf5b621986252f6113c036c74943df83f45f24af3e5bb76ade44e5175eecc_prof);

        
        $__internal_f4b9a65b17045694b7ed1837e2b2e9ed9d4255dbad45725e1f66d0737c22b6bf->leave($__internal_f4b9a65b17045694b7ed1837e2b2e9ed9d4255dbad45725e1f66d0737c22b6bf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
