<?php

/* MAUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e71b46e6ba830825032171ef76ef4857a0e0bb57dfb8e2d0b5018da178ad0289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_aaa5fe52f65c4b26ad1e58da0d38a0b270bb157301e6e55c65336ed69e5c5bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa5fe52f65c4b26ad1e58da0d38a0b270bb157301e6e55c65336ed69e5c5bb2->enter($__internal_aaa5fe52f65c4b26ad1e58da0d38a0b270bb157301e6e55c65336ed69e5c5bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset.html.twig"));

        $__internal_90339bd9b6009cde6901c45dcd0b91ea63be6fe583a6b7150489ac11060dbdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90339bd9b6009cde6901c45dcd0b91ea63be6fe583a6b7150489ac11060dbdd5->enter($__internal_90339bd9b6009cde6901c45dcd0b91ea63be6fe583a6b7150489ac11060dbdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa5fe52f65c4b26ad1e58da0d38a0b270bb157301e6e55c65336ed69e5c5bb2->leave($__internal_aaa5fe52f65c4b26ad1e58da0d38a0b270bb157301e6e55c65336ed69e5c5bb2_prof);

        
        $__internal_90339bd9b6009cde6901c45dcd0b91ea63be6fe583a6b7150489ac11060dbdd5->leave($__internal_90339bd9b6009cde6901c45dcd0b91ea63be6fe583a6b7150489ac11060dbdd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8857be37834a1ead8e676af5ff2b919f9e853c29cb0134616a05b55caf47bacb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8857be37834a1ead8e676af5ff2b919f9e853c29cb0134616a05b55caf47bacb->enter($__internal_8857be37834a1ead8e676af5ff2b919f9e853c29cb0134616a05b55caf47bacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8119b3cd4576929fc4b57ca539d1d76ab4e915b4630682fac55c0613a6662e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8119b3cd4576929fc4b57ca539d1d76ab4e915b4630682fac55c0613a6662e30->enter($__internal_8119b3cd4576929fc4b57ca539d1d76ab4e915b4630682fac55c0613a6662e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "MAUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8119b3cd4576929fc4b57ca539d1d76ab4e915b4630682fac55c0613a6662e30->leave($__internal_8119b3cd4576929fc4b57ca539d1d76ab4e915b4630682fac55c0613a6662e30_prof);

        
        $__internal_8857be37834a1ead8e676af5ff2b919f9e853c29cb0134616a05b55caf47bacb->leave($__internal_8857be37834a1ead8e676af5ff2b919f9e853c29cb0134616a05b55caf47bacb_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:reset.html.twig";
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
    {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
